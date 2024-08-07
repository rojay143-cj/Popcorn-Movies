<div class="dt-wrapper_role col-span-4 mx-10">
    <div
        class="relative text-xl font-bold tracking-wide underline underline-offset-4 mb-10 mt-2 p-1 flex gap-3 text-slate-700">
        <a href="">Dashboard</a>
        <span><i class="fa-solid fa-caret-right"></i></span>
        <a href="">Team</a>
        <div class="absolute right-0 w-20 h-10">
            <button
                class="btn-add_role text-nowrap w-full h-full bg-green-800 rounded-lg text-xs text-gray-200 flex justify-center items-center">
                Add Role
            </button>
        </div>
    </div>
    <table id="example" class="display w-full">
        <thead>
            <tr>
                <th>Name</th>
                <th>Position</th>
                <th width="100px">Manage</th>
            </tr>
        </thead>
        <tbody>
            <tr>
                <td>Christian James Aguilar</td>
                <td>Director</td>
                <td class="flex justify-center gap-3">
                    <button type="button" class="btn-edit"><i
                            class="fa-regular fa-pen-to-square text-slate-700"></i></button>
                    <button type="button" class="btn-delete"><i
                            class="fa-regular fa-trash-can text-red-600"></i></button>
                </td>
            </tr>
        </tbody>
    </table>
</div>

<!-- Modal Add Role -->
<div class="modal-add_role fixed inset-0 flex items-center justify-center z-30">
    <div class="modal-content bg-stone-800 text-gray-200 rounded-lg shadow-lg w-[30rem] relative p-6 z-20">
        <div class="modal-header flex justify-between items-center mb-6">
            <h4 class="modal-title text-lg font-semibold tracking-widest">Add Role</h4>
            <button type="button" class="close-modal text-gray-400 hover:text-gray-200">
                <i class="fa-solid fa-xmark text-xl"></i>
            </button>
        </div>
        <div class="modal-body">
            <form action="" class="space-y-4">
                <div>
                    <label for="name" class="block text-sm font-medium mb-1">Name</label>
                    <input type="text" id="name" placeholder="Enter name"
                        class="w-full px-3 py-2 bg-stone-700 text-gray-200 border border-stone-600 rounded focus:outline-none focus:ring-2 focus:ring-green-600">
                </div>
                <div>
                    <label for="position" class="block text-sm font-medium mb-1">Position</label>
                    <input type="text" id="position" placeholder="Enter position"
                        class="w-full px-3 py-2 bg-stone-700 text-gray-200 border border-stone-600 rounded focus:outline-none focus:ring-2 focus:ring-green-600">
                </div>
            </form>
        </div>
        <div class="modal-footer flex justify-end space-x-3 mt-6">
            <button type="button"
                class="btn-cancel px-4 py-2 bg-gray-600 text-sm text-gray-200 rounded hover:bg-gray-500 focus:outline-none">
                Cancel
            </button>
            <button type="button"
                class="btn-save px-4 py-2 bg-green-700 text-sm text-gray-200 rounded hover:bg-green-600 focus:outline-none">
                Save
            </button>
        </div>
    </div>
    <div class="absolute inset-0 bg-slate-800 opacity-50 z-10"></div>
</div>