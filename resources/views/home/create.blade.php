<x-layout-login>
    <form class="text-center  mx-0" action ="{{ route('register') }}" method ="post">
    @csrf
        <h6 class="h6 mt-2 mb-0 fw-normal">新規会員登録はこちら</h6>
        <div class="login">
        @if($errors->any())
            <div class = "alert alert-danger py-2">
                <ul class = "mb-0 pb-0 pt-1" style="list-style: none; padding:0;">
                <x-input-error :messages="$errors->get('email')" class="m-0" /><br><x-input-error :messages="$errors->get('password')" class="m-0" />
            </div><br>
        @endif
            <input type="text" name="name" id="name" :value="old('name')" required autofocus autocomplete="name" placeholder="name">
            <input type="text" name="space_id" id="space_id" :value="old('space_id')" required autofocus autocomplete="space_id" placeholder="space_id">
            <input type="email" name="email" placeholder="email" :value="old('email')">
            <input type="password" name="password" placeholder="password" :value="old('password')">
            <input type="password" name="password_confirmation" id="password_confirmation" required autocomplete="new-password" placeholder = "Confirm password"><br>
            <button type ="submit">登録</button>

            <div class = "text-center"><hr>
                <h6 class="h6 mt-4 mb-0 fw-normal">パスワードを忘れた場合はこちら</h6>
                <div class="login"><a href="{{ route('recet') }}">再設定</a>
                </div>
            </div>
        </div>
    </form>
</x-layout-login>