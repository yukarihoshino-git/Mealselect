
<x-layout-login>
    <form class="text-center  mx-0" action ="{{ route('login') }}" method ="post">
    @csrf
        <h6 class="h6 mt-2 mb-0 fw-normal">ログインはこちら</h6>
        <div class="login">
        @if($errors->any())
            <div class = "alert alert-danger py-2">
                <ul class = "mb-0 pb-0 pt-1" style="list-style: none; padding:0;">
                <x-input-error :messages="$errors->get('email')" class="m-0" /><br><x-input-error :messages="$errors->get('password')" class="m-0" />
            </div><br>
        @endif
            <input type="email" name="email" placeholder="email" >
            <input type="password" name="password" placeholder="password" ><br>
            <button type ="submit">Login</button>

            <div class = "text-center"><hr>
                <h6 class="h6 mt-4 mb-0 fw-normal">パスワードを忘れた場合はこちら</h6>
                <div class="login"><a href="{{ route('recet') }}">再設定</a>
                </div>
            </div>
        </div>
    </form>
</x-layout-login>