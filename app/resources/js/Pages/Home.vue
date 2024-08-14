<template>
    <Head title="Dashboard" />
    <AuthenticatedLayout>
        <!-- <template #header>
            <h2 class="font-semibold text-xl text-gray-800 dark:text-gray-200 leading-tight">Dashboard</h2>
        </template> -->

        <div v-if="fadeOut" class="pt-12 fade-out">
            <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
                <div class="bg-white dark:bg-gray-800 overflow-hidden shadow-sm sm:rounded-lg">
                    <div class="p-6 text-gray-900 dark:text-gray-100">{{ _("You're logged in!") }} {{ user.name.toUpperCase() }} {{ _("Welcome!")}}</div>
                </div>
            </div>
        </div>
        <!-- <div class="py-12">
            <div class="max-w-2xl mx-auto sm:px-6 lg:px-8">
                <div class="bg-white dark:bg-gray-800 overflow-hidden shadow-sm sm:rounded-lg">
                    <div class="p-6 text-gray-900 dark:text-gray-100">teste</div>
                </div>
            </div>
        </div> -->
        <!-- <div class="py-12">
            <div class="max-w-5xl mx-auto sm:px-6 lg:px-8">
                <div class="flex flex-col sm:flex-row sm:space-x-4 space-y-4 sm:space-y-0">
                    <div class="flex-1 bg-white dark:bg-gray-800 overflow-hidden shadow-sm sm:rounded-lg w-full sm:w-1/2 h-32">
                        <div class="p-6 text-gray-900 dark:text-gray-100">Card 1</div>
                    </div>
                    <div class="flex-1 bg-white dark:bg-gray-800 overflow-hidden shadow-sm sm:rounded-lg w-full sm:w-1/2 h-32">
                        <div class="p-6 text-gray-900 dark:text-gray-100">Card 2</div>
                    </div>
                    <div class="flex-1 bg-white dark:bg-gray-800 overflow-hidden shadow-sm sm:rounded-lg w-full sm:w-1/2 h-32">
                        <div class="p-6 text-gray-900 dark:text-gray-100">Card 3</div>
                    </div>
                    <div class="flex-1 bg-white dark:bg-gray-800 overflow-hidden shadow-sm sm:rounded-lg w-full sm:w-1/2 h-32">
                        <div class="p-6 text-gray-900 dark:text-gray-100">Card 4</div>
                    </div>
                    <div class="flex-1 bg-white dark:bg-gray-800 overflow-hidden shadow-sm sm:rounded-lg w-full sm:w-1/2 h-32">
                        <div class="p-6 text-gray-900 dark:text-gray-100">Card 5</div>
                    </div>
                </div>
            </div>
        </div> -->
        <div class="py-12">
            <div class="max-w-5xl mx-auto sm:px-6 lg:px-8">
                <div class="flex flex-wrap justify-center -mx-2">
                    <a href="#" class="flex-none hover:dark:bg-gray-600 bg-white dark:bg-gray-800 overflow-hidden shadow-sm sm:rounded-lg w-full sm:w-1/5 h-32 mx-2 mb-4">
                        <div class="p-6 text-gray-900 dark:text-gray-100">Direção</div>
                    </a>
                    <a href="#" class="flex-none hover:dark:bg-gray-600 bg-white dark:bg-gray-800 overflow-hidden shadow-sm sm:rounded-lg w-full sm:w-1/5 h-32 mx-2 mb-4">
                        <div class="p-6 text-gray-900 dark:text-gray-100">Docente</div>
                    </a>
                    <a href="#" class="flex-none hover:dark:bg-gray-600 bg-white dark:bg-gray-800 overflow-hidden shadow-sm sm:rounded-lg w-full sm:w-1/5 h-32 mx-2 mb-4">
                        <div class="p-6 text-gray-900 dark:text-gray-100">Alunos</div>
                    </a>
                    <a href="#" class="flex-none hover:dark:bg-gray-600 bg-white dark:bg-gray-800 overflow-hidden shadow-sm sm:rounded-lg w-full sm:w-1/5 h-32 mx-2 mb-4">
                        <div class="p-6 text-gray-900 dark:text-gray-100">Disciplina</div>
                    </a>
                    <a href="#" class="flex-none hover:dark:bg-gray-600 bg-white dark:bg-gray-800 overflow-hidden shadow-sm sm:rounded-lg w-full sm:w-1/5 h-32 mx-2 mb-4">
                        <div class="p-6 text-gray-900 dark:text-gray-100">Turma</div>
                    </a>
                </div>
            </div>
        </div>
    </AuthenticatedLayout>
</template>
<script>
    import AuthenticatedLayout from '@/Layouts/AuthenticatedLayout.vue';
    import { Head } from '@inertiajs/vue3';
    import { _ } from '@utils/translate';
    import { reactive, ref, toRefs } from 'vue'

export default {
    components: {
        AuthenticatedLayout,
        Head,
    },
    props: ['user'],
    setup(user) {

        const fadeOut = ref(true)

        setTimeout(() => {
            fadeOut.value = false
        }, 5000);
        

        return {
            // vars
            fadeOut,
            
            // funcs
            _,
        }
    }
}
</script>
<style>
    * {
        box-sizing: border-box !important;
    }

    .fade-out{
        animation:opac 5s forwards
    }
    
    @keyframes opac{from{opacity:1} to{opacity:0}}
</style>