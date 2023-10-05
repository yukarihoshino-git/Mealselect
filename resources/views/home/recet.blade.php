<x-layout-login>
    <x-auth-session-status class="mb-4" :status="session('status')" />
        <form method="POST" class ="text-center" action="{{ route('password.email') }}">
            @csrf
            <div class="login">
                <input type ="email" id="email" name="email" :value="old('email')" placeholder="email">
                <x-input-error :messages="$errors->get('email')" class="mt-2" />
                <div class="flex items-center justify-end mt-4">
                    <x-recet-button>
                        {{ __('パスワード 再設定メールを送る') }}
                    </x-recet-button>
                </div>
            </div>
        </form>
</x-layout-login>