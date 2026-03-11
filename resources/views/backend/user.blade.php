@extends('backend.layouts._master')

@section('title')
    User Management
@endsection

@section('content')
    <div class="space-y-8">
        <h1 class="text-2xl font-bold">@yield('title') Page</h1>
        <div class="bg-white rounded-xl shadow p-6">
            <h2 class="text-lg font-semibold mb-4">Add User</h2>
            <form action="{{ route('users.store') }}" method="POST">
                @csrf
                <label>Username</label>
                <input name="username" class="border rounded w-full p-2 mt-2 mb-4" placeholder="Username">
                <label>Password</label>
                <input type="password" name="password" class="border rounded w-full p-2 mt-2 mb-4" placeholder="Password">
                <label>Confirm Password</label>
                <input type="password" name="password_confirmation" class="border rounded w-full p-2 mt-2 mb-4"
                    placeholder="Confirm Password">
                <div class="flex justify-end">
                    <button class="bg-blue-500 text-white px-4 py-2 rounded hover:bg-blue-600 hover:cursor-pointer">
                        Add User
                    </button>
                </div>
            </form>
            <div class="w-full overflow-x-auto mt-8">
                <table class="w-full border border-gray-500 rounded-lg overflow-hidden table-fixed">
                    <thead class="bg-gray-300">
                        <tr>
                            <th class="px-6 py-3 text-left text-sm font-semibold w-20">ID</th>
                            <th class="px-6 py-3 text-left text-sm font-semibold">Username</th>
                            <th class="px-6 py-3 text-center text-sm font-semibold w-40">Action</th>
                        </tr>
                    </thead>
                    <tbody class="divide-y">
                        @foreach ($users as $user)
                            <tr class="hover:bg-gray-50">
                                <td class="px-6 py-4">{{ $user->id }}</td>
                                <td class="px-6 py-4">{{ $user->username }}</td>
                                <td class="px-6 py-4 flex justify-center gap-2">
                                    <!-- Edit Button -->
                                    <button onclick="openModal({{ $user->id }}, '{{ $user->username }}')"
                                        class="bg-yellow-500 text-white px-3 py-1 rounded hover:bg-yellow-600">
                                        Edit
                                    </button>
                                    <!-- Delete -->
                                    <form action="{{ route('users.destroy', $user->id) }}" method="POST">
                                        @csrf
                                        @method('DELETE')
                                        <button class="bg-red-500 text-white px-3 py-1 rounded hover:bg-red-600">
                                            Delete
                                        </button>
                                    </form>
                                </td>
                            </tr>
                            <!-- MODAL EDIT USER -->
                            <div id="editModal" class="fixed inset-0 bg-black/40 hidden items-center justify-center z-50">
                                <div class="bg-white rounded-lg w-[400px] p-6">
                                    <h2 class="text-lg font-semibold mb-4">Edit User</h2>
                                    <form action="{{ route('users.updatePassword', $user->id) }}" id="editForm"
                                        method="POST">
                                        @csrf
                                        <label>Username</label>
                                        <input id="editName" name="username"
                                            class="border bg-gray-200 rounded w-full p-2 mt-2 mb-4 hover:cursor-not-allowed"
                                            disabled>
                                        <label>New Password</label>
                                        <input type="password" name="password" class="border rounded w-full p-2 mt-2 mb-4"
                                            placeholder="Kosongkan jika tidak diubah">
                                        <label>Confirm Password</label>
                                        <input type="password" name="password_confirmation"
                                            class="border rounded w-full p-2 mt-2 mb-4">
                                        <div class="flex justify-end gap-2">
                                            <button type="button" onclick="closeModal()"
                                                class="bg-gray-400 text-white px-4 py-2 rounded">
                                                Cancel
                                            </button>
                                            <button class="bg-blue-500 text-white px-4 py-2 rounded hover:bg-blue-600">
                                                Update
                                            </button>
                                        </div>
                                    </form>
                                </div>
                            </div>
                        @endforeach
                    </tbody>
                </table>
            </div>
        </div>
    </div>

    <script>
        function openModal(id, username) {
            const modal = document.getElementById('editModal')
            modal.classList.remove('hidden')
            modal.classList.add('flex')
            document.getElementById('editName').value = username
            document.getElementById('editForm').action = "/backend/users/" + id + "/password"
        }

        function closeModal() {
            const modal = document.getElementById('editModal')
            modal.classList.remove('flex')
            modal.classList.add('hidden')
        }
    </script>
@endsection
