<div>
        <table class='w-full border-r-2'>
             <thead>
                <x-th>Roles</x-th>
             </thead>
             <tbody>
                @foreach ($roles as $role)
                    <tr>
                        <x-td>{{$role->name}}</x-td>
                    </tr>
                @endforeach
             </tbody>
        </table>
         <div class="flex justify-between py-6 ">
            <a href="{{route('roles.add')}}" class="py-2 px-4 border bg-gray-400 rounded-md flex items-center">
                    Create Roles
            </a>
        </div>
</div>