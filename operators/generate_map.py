import bpy

class Generate_mapOperator(bpy.types.Operator):
    bl_idname = "object.generate_map"
    bl_label = "generate_map"

    def execute(self, context):
        bpy.ops.mesh.primitive_plane_add(size=100, enter_editmode=False, align='WORLD', location=(0, 0, 0), scale=(1, 1, 1))

        return {'FINISHED'}
