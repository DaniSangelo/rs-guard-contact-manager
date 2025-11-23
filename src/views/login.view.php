<div class="grid grid-cols-[2fr_1fr]">
    <div>
        <img
            class="fixed p-10"
            src="/images/logo_name.png"
            alt="logo" />
        <img
            src="/images/cover.png"
            alt="imagem de capa do login"
            class="h-screen w-full object-cover" />
    </div>
    <div class="flex flex-col p-20">
        <div class="text-sm pl-[30%] mb-10">
            Não tem uma conta? <a href="/" class="font-bold text-accent-brand">Criar conta.</a>
        </div>

        <div class="flex flex-col">
            <h2 class="text-2xl font-bold mb-10"> Acessar conta </h2>
            <form action="/login" method="POST" class="flex flex-col space-y-3">
                <div class="space-y-3">
                    <label
                        for="email"
                        class="block text-sm mb-1">
                        E-mail
                    </label>
                    <input
                        type="text"
                        name="email"
                        class="text-sm border border-gray-600 p-1 rounded-md min-w-[400px]" />
                    <label
                        for="password"
                        class="block text-sm mb-1">
                        Senha
                    </label>
                    <input
                        type="password"
                        name="password"
                        class="text-sm border border-gray-600 p-1 rounded-md min-w-[400px]" />
                </div>
                <div class="flex justify-end">
                    <button
                        type="submit"
                        class="
                            text-sm
                            font-semibold
                            p-2
                            bg-accent-brand
                            text-content-inverse
                            rounded-md
                            cursor-pointer
                            hover:bg-accent-brand/90"
                        >
                        Acessar conta
                    </button>
                </div>
            </form>
        </div>
    </div>
</div>