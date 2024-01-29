<x-guest2>
<x-auth-card2>
        <x-slot name="nemo">
            <div class="text-base font-bold">{{$users->links()}}</div>
        </x-slot>
<div class="flex items-center place-content-center underline-offset-4">    
    <table >
    <tr>
        <th>名前</th>
        <th>勤務開始</th>
        <th>勤務終了</th>
        <th>休憩時間</th>
        <th>勤務時間</th>
    </tr>   
    @foreach ($users as $user) 
    <tr>
        <td>{{$user->name}}</td>       
    </tr>
    @endforeach
    </table>
    
  </div>
  {{$users->links()}}

    </x-auth-card2>
</x-guest2>