import bpy
import math
from math import *
import random as r
import numpy as np


r.seed(69)

class Place_buildingsOperator(bpy.types.Operator):
    bl_idname = "object.place_buildings"
    bl_label = "place_buildings"

    def execute(self, context):
        scene = context.scene

        #PROPERTIES
        building_collection = bpy.data.collections[scene.building_collection]

        street_object = bpy.data.objects[scene.street_object]

        building_density = scene.building_density

        #remove collection if already exists
        #name = "CitySketch"
        #remove_collection_objects = True

        #coll = bpy.data.collections.get(name)

        #if coll:
        #    if remove_collection_objects:
        #        obs = [o for o in coll.objects if o.users == 1]
        #        while obs:
        #            bpy.data.objects.remove(obs.pop())

        #bpy.data.collections.remove(coll)

        # Create a new collection and link it to the scene.
        generatedCollection = bpy.data.collections.new("CitySketch")
        scene.collection.children.link(generatedCollection)
        # Link active object to the new collection


        #GENERATE CITY LOGIC
        w, h = 100, 100;
        city = [[0 for x in range(w)] for y in range(h)]

        #generate roads
        city = self.createRoadNetwork(0, 50, 50, city, 1, 0)
        city = self.createRoadNetwork(0, 50, 50, city, 0, 1)
        city = self.createRoadNetwork(0, 50, 50, city, -1, 0)
        city = self.createRoadNetwork(0, 50, 50, city, 0, -1)

        #chance for building in %
        chanceforBuilding = building_density
        for i in range(len(city)):
            for j in range(len(city[i])):
                if (r.randint(0, 100) < chanceforBuilding and city[i][j] != 2):
                    city[i][j] = 1

        #for i in range(len(city)):
        #    for j in range(len(city[i])):
        #        print(city[i][j], end=' ')
        #    print()
        #PLACE ALL OBJECTS

        roadMat = bpy.data.materials.new("PKHG")
        roadMat.diffuse_color = (0.05, 0.05, 0.05, 0)

        for i in range(len(city)):
            for j in range(len(city[i])):
                if (city[i][j] == 1):
                    #choose object to be placed
                    building = building_collection.all_objects[r.randint(0, len(building_collection.all_objects)-1)]
                    self.placeBuilding(context, building, generatedCollection, i, j)
                if (city[i][j] == 2):
                    #choose road to be placed
                    self.placeRoad(context, street_object, generatedCollection, i, j, roadMat)

        return {'FINISHED'}

    def placeBuilding(self, context, building, collection, x, y):
        placed_obj = building.copy()
        placed_obj.data = building.data.copy()
        placed_obj.animation_data_clear()

        placed_obj.location = (x-50, y-50, 0)

        collection.objects.link(placed_obj)

    def placeRoad(self, context, road, collection, x, y, mat):
        placed_road = road.copy()
        placed_road.data = road.data.copy()
        placed_road.animation_data_clear()

        placed_road.location = (x - 50, y - 50, -0.95)
        placed_road.active_material = mat

        collection.objects.link(placed_road)

    def createRoadNetwork(self, depth, x, y, city, directionX, directionY):

        #hit a wall
        if (x >= len(city) or y >= len(city) or x < 0 or y < 0):
            return city

        if (city[x][y] == 2 and depth > 1):
            #print("road")
            return city

        if (depth == 500):
            #print("end")
            return city



        city[x][y] = 2

        if (r.randint(0, 100) < 30):
            direction = r.randint(0, 3)
            if (direction == 0):
                newDirectionX = 1
                newDirectionY = 0
            elif (direction == 1):
                newDirectionX = -1
                newDirectionY = 0
            elif (direction == 2):
                newDirectionX = 0
                newDirectionY = 1
            elif (direction == 3):
                newDirectionX = 0
                newDirectionY = -1

            if (not (directionX == newDirectionX and directionY == newDirectionY)):
                city = self.createRoadNetwork(depth + 1, x + newDirectionX, y + newDirectionY, city, newDirectionX, newDirectionY)

        city = self.createRoadNetwork(depth + 1, x + directionX, y + directionY, city, directionX, directionY)

        return city

