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
                hover:bg-accent-brand/90">
            Acessar conta
        </button>
    </div>
</form>