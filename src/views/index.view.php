<div class="grid grid-cols-[2fr_1fr]">
    <div>
        <img
            src="/images/cover.png"
            alt="imagem de capa do login"
            class="h-screen w-full object-cover" />
    </div>
    <div class="flex flex-col p-20">
        <div class="text-sm pl-[30%] mb-10">
            Já tem uma conta? <a href="/login" class="font-bold text-accent-brand">Acessar conta.</a>
        </div>

        <div class="flex flex-col">
            <h2 class="text-2xl font-bold mb-10"> Criar conta </h2>
            <form action="/register" method="POST" class="flex flex-col space-y-3">
                <div class="space-y-3">
                    <label
                        for="name"
                        class="block text-sm mb-1">
                        Nome
                    </label>
                    <input
                        type="text"
                        name="name"
                        class="text-sm border border-gray-600 p-1 rounded-md min-w-[400px]" />
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
                    
                    <label
                        for="confirm_password"
                        class="block text-sm mb-1">
                        Confirmar senha
                    </label>
                    <input
                        type="password"
                        name="confirm_password"
                        class="text-sm border border-gray-600 p-1 rounded-md min-w-[400px]" />
                </div>
                <div class="flex justify-end">
                    <button
                        type="submit"
                        class="
                            p-2
                            text-sm
                            font-semibold
                            bg-accent-brand
                            text-content-inverse
                            rounded-md
                            cursor-pointer
                            hover:bg-accent-brand/90"
                        >
                        Criar conta
                    </button>
                </div>
            </form>
        </div>
    </div>
</div>