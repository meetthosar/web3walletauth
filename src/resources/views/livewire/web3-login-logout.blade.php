<div class="flex space-x-2 justify-center" x-data="loginLogout()">
    @guest
    <button @click="login()" type="button"
            class="{{ $loginClass }}">
        {{$loginText}}
    </button>
    @endguest

    @auth
        <a href="#" @if($logoutClass != '') class="{{ $logoutClass }}" @endif
            @click="logout()"><i class="material-icons">exit_to_app</i> {{$logoutText}}</a>
    @endauth
    {{--<button @click="logout()" type="button"
            class="inline-block px-6 py-2.5 bg-blue-600 text-white font-medium text-xs
            leading-tight uppercase rounded shadow-md hover:bg-blue-700 hover:shadow-lg
            focus:bg-blue-700 focus:shadow-lg focus:outline-none
            focus:ring-0 active:bg-blue-800 active:shadow-lg
            transition duration-150 ease-in-out">
        Logout
    </button>

{{--    @push('scripts')--}}
    <script>
        // document.addEventListener('livewire:load', function () {
            function loginLogout() {
                return {
                    account : null,
                    login : async () => {
                        this.account = await Window.Reach.getDefaultAccount();
                        if(this.account !== null ) @this.login(  (this.account));
                    },
                    logout : () => {
                        // Window.Reach.disconnect();
                        @this.logout();
                    }
                }
            }

        // })
    </script>
{{--    @endpush--}}
</div>
