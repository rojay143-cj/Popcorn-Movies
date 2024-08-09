<div class="TEAM ml-60 md:ml-64 lg:ml-80 xl:ml-60 w-full min-w-96 max-w-[30rem] md:max-w-[65rem] mt-10 flex flex-col"
    style="display: none">
    <div class="flex flex-col items-center">
        <div class="w-full flex justify-between">
            <div class="flex gap-3 text-xl font-bold tracking-wide underline underline-offset-4 mb-10 mt-2">
                <a href="">Dashboard</a>
                <span><i class="fa-solid fa-caret-right"></i></span>
                <a href="">Team</a>
            </div>
            <div class="mt-2">
                <button data-toggle="modal-add_role"
                    class="btn-add_role text-nowrap p-3 bg-green-800 rounded-lg text-xs text-gray-200 flex justify-center items-center"
                    aria-label="Add new country">
                    Add Country
                </button>
            </div>
        </div>
        <div class="w-full lg:w-[65rem]">
            <table id="example" class="display w-full">
                <thead>
                    <tr>
                        <th>Name</th>
                        <th>Position</th>
                        <th width="100px">Manage</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($production as $team)
                        <tr>
                            <td>{{ $team->name }}</td>
                            <td>{{ $team->position }}</td>
                            <td class="flex justify-center gap-3">
                                <button type="button" class="btn-edit_role_{{ $team->prod_id }}"
                                    aria-label="Edit role for {{ $team->name }}">
                                    <i class="fa-regular fa-pen-to-square text-slate-700"></i>
                                </button>
                                <button type="button" class="btn-delete_role_{{ $team->prod_id }}"
                                    aria-label="Delete role for {{ $team->name }}">
                                    <i class="fa-regular fa-trash-can text-red-600"></i>
                                </button>
                            </td>
                        </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
    </div>
    @include('pages.admin.components.admin_check_error')
</div>


@foreach ($production as $team)
    <div class="modal-edit_role_{{$team->prod_id}} closeedit fixed inset-0 flex items-center justify-center z-30"
        style="display: none">
        <div class="modal-content bg-stone-800 text-gray-200 rounded-lg shadow-lg w-[25rem] relative p-6 z-20">
            <div class="modal-header flex justify-between items-center mb-6">
                <h4 class="modal-title text-lg font-semibold tracking-widest">{{$team->name}}</h4>
                <button type="button" class="close-editmodal text-gray-400 hover:text-gray-200">
                    <i class="fa-solid fa-xmark text-xl"></i>
                </button>
            </div>
            <form action="{{route('Edit_Team', $team->prod_id)}}" method="POST" class="space-y-4">
                @csrf
                <div class="modal-body">
                    <div class="text-xs mb-3">
                        <label for="name" class="block font-medium mb-1">Name</label>
                        <input type="text" id="name" placeholder="Enter name" name="name" value="{{old('name')}}"
                            class="w-full px-3 py-2 bg-stone-700 text-gray-200 border border-stone-600 rounded focus:outline-none focus:ring-2 focus:ring-green-600">
                    </div>
                    <div class="text-xs">
                        <label for="position" class="block font-medium mb-1">Position</label>
                        <input type="text" id="position" placeholder="Enter position" name="position"
                            value="{{old('position')}}"
                            class="w-full px-3 py-2 bg-stone-700 text-gray-200 border border-stone-600 rounded focus:outline-none focus:ring-2 focus:ring-green-600">
                    </div>
                </div>
                <div class="modal-footer flex justify-end space-x-3 mt-6">
                    <button type="button"
                        class="close-editmodal px-4 py-2 bg-gray-600 text-sm text-gray-200 rounded hover:bg-gray-500 focus:outline-none">
                        Cancel
                    </button>
                    <button type="submit" name="save_role"
                        class="btn-save px-4 py-2 bg-green-700 text-sm text-gray-200 rounded hover:bg-green-600 focus:outline-none">
                        Save
                    </button>
                </div>
            </form>
        </div>
        <div class="absolute inset-0 bg-slate-800 opacity-50 z-10"></div>
    </div>
    <div class="modal-delete_role_{{$team->prod_id}} closedelete fixed inset-0 flex items-center justify-center z-30"
        style="display: none">
        <div class="modal-content bg-gray-200 text-stone-800 rounded-lg shadow-lg w-auto relative p-6 z-20">
            <div class="flex w-full justify-center"><i
                    class="fa-solid fa-triangle-exclamation fa-beat-fade text-4xl text-red-600"></i></div>
            <div class="modal-header flex justify-between items-center mb-6">
                <h4 class="modal-title text-lg font-bold tracking-widest text-nowrap">Are you sure you want to remove
                    {{$team->name}}?
                </h4>
                <button type="button"
                    class="close-deletemodal absolute right-3 top-3 text-gray-400 hover:text-gray-600 ml-10">
                    <i class="fa-solid fa-xmark text-xl"></i>
                </button>
            </div>
            <form action="{{route('Delete_Team')}}" method="POST">
                @csrf
                <p class="text-xs w-96 font-semibold tracking-wider">Note: This will delete this person permanently. You
                    cannot undo this action.</p>
                <input type="hidden" name="prod_id" value="{{$team->prod_id}}">
                <div class="modal-footer flex justify-start space-x-3 mt-10">
                    <button type="button"
                        class="close-deletemodal px-4 py-2 bg-gray-200 text-sm rounded hover:bg-gray-300 border border-stone-800">
                        Cancel
                    </button>
                    <button type="submit" name="save_role"
                        class="btn-save px-4 py-2 bg-red-700 text-sm text-gray-200 rounded hover:bg-red-600 focus:outline-none">
                        Delete
                    </button>
                </div>
            </form>
        </div>
        <div class="absolute inset-0 bg-slate-800 opacity-50 z-10"></div>
    </div>
@endforeach
<div class="modal-add_role fixed inset-0 flex items-center justify-center z-30" style="display: none">
    <div class="modal-content bg-stone-800 text-gray-200 rounded-lg shadow-lg w-[25rem] relative p-6 z-20">
        <div class="modal-header flex justify-between items-center mb-6">
            <h4 class="modal-title text-lg font-semibold tracking-widest">Add Role</h4>
            <button type="button" class="close-modal text-gray-400 hover:text-gray-200">
                <i class="fa-solid fa-xmark text-xl"></i>
            </button>
        </div>
        <form action="{{route('Add_Team')}}" method="POST" class="space-y-4">
            @csrf
            <div class="modal-body">
                <div class="text-xs mb-3">
                    <label for="name" class="block font-medium mb-1">Name</label>
                    <input type="text" id="name" placeholder="Enter name" name="name" value="{{old('name')}}"
                        class="w-full px-3 py-2 bg-stone-700 text-gray-200 border border-stone-600 rounded focus:outline-none focus:ring-2 focus:ring-green-600">
                </div>
                <div class="text-xs">
                    <label for="position" class="block font-medium mb-1">Position</label>
                    <input type="text" id="position" placeholder="Enter position" name="position"
                        value="{{old('position')}}"
                        class="w-full px-3 py-2 bg-stone-700 text-gray-200 border border-stone-600 rounded focus:outline-none focus:ring-2 focus:ring-green-600">
                </div>
            </div>
            <div class="modal-footer flex justify-end space-x-3 mt-6">
                <button type="button"
                    class="close-modal px-4 py-2 bg-gray-600 text-sm text-gray-200 rounded hover:bg-gray-500 focus:outline-none">
                    Cancel
                </button>
                <button type="submit" name="save_role"
                    class="btn-save px-4 py-2 bg-green-700 text-sm text-gray-200 rounded hover:bg-green-600 focus:outline-none">
                    Save
                </button>
            </div>
        </form>
    </div>
    <div class="absolute inset-0 bg-slate-800 opacity-50 z-10"></div>
</div>