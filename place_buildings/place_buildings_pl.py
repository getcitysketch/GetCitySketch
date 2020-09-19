import bpy

from bpy.props import *
from bpy.types import Scene, Panel

class Place_buildingsPanel(bpy.types.Panel):
    bl_idname = "place_buildings_panel"
    bl_label = "place_buildings_panel"
    bl_category = "CitySketch"
    bl_space_type = "VIEW_3D"
    bl_region_type = "UI"

    def draw(self, context):
        scene = context.scene

        layout = self.layout
        layout.use_property_split = True



        col = layout.column()
        #layout.prop(bpy.data, "collections")
        #layout.prop_search(place_buildings_op, "building_collection", bpy.data, "materials")
        col.prop_search(scene, "building_collection", bpy.data, "collections", text="Building Collection")


        col.prop_search(scene, "street_object", bpy.data, "objects", text="Street Asset")

        col.prop(scene, "building_density", text="Building Density")

        col.operator('object.place_buildings', text="Place Buildings")

def register():
    bpy.utils.register_class(Place_buildingsPanel)
    Scene.building_collection = StringProperty(default="")
    Scene.street_object = StringProperty(default="")
    Scene.building_density = IntProperty(
        default=10,
        min=0,
        max=100
        )

def unregister():
    del Scene.building_collection
    del Scene.street_object
    del Scene.building_density
    bpy.utils.unregister_class(Place_buildingsPanel)

register()