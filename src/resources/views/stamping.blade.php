<x-guest2>
    <x-auth-card2>
        <x-slot name="nemo">
            <div class="text-base font-bold">お疲れ様です！</div>      <!-- あとでやる-->
        </x-slot>
            <form method="" action="">            <!-- あとでやる-->
                <div class="grid grid-cols-2 gap-6 place-content-center h-48 mt-20">
                        <input class="h-32 w-80 bg-inherit bg-white" type="submit" name="workstart" value="勤務開始">
                        <input class="h-32 w-80 bg-inherit bg-white" type="submit" name="workend" value="勤務終了">
                        <input class="h-32 w-80 bg-inherit bg-white" type="submit" name="breakstart" value="休憩開始">
                        <input class="h-32 w-80 bg-inherit bg-white" type="submit" name="breakend" value="休憩終了">
                </div>
            </form>
    </x-auth-card2>
</x-guest2>