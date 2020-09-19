import bpy

class Generate_mapPanel(bpy.types.Panel):
    bl_idname = "generate_map_panel"
    bl_label = "generate_map_panel"
    bl_category = "CitySketch"
    bl_space_type = "VIEW_3D"
    bl_region_type = "UI"

    def draw(self, context):
        layout = self.layout

        row = layout.row()
        row.operator('object.generate_map', text="Generate Map")