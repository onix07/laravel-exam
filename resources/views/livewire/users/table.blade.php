
<div>
        <table class='w-full border-r-2'>
             <thead>
                <x-th>Name</x-th>
                <x-th>Email</x-th>
                <x-th>User Role</x-th>
             </thead>
             <tbody>
                @foreach ($users as $user)
                    <tr>
                        <x-td>{{$user->name}}</x-td>
                        <x-td> {{$user->email}}</x-td>
                        <x-td>
                             <ul>
                                @foreach($user->roles as $role)
                                    <li>{{ $role->name }}</li>
                                @endforeach
                            </ul>
                        </x-td>
                    </tr>
                @endforeach
             </tbody>
        </table>
         <div class="flex justify-between py-6 ">
            <a href="{{route('users.add')}}" class="py-2 px-4 border bg-gray-400 rounded-md flex items-center">
                    Create Users
            </a>
        </div>
</div>