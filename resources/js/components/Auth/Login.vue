<script setup>
    import { onMounted } from 'vue';
    import { storeToRefs } from 'pinia';

    import {useAppStore} from '@/store/useAppStore';

    const appStore = useAppStore();

    const { lang, frontLang } = storeToRefs(appStore);

    lang.value = 'am';
    onMounted(() => {
        appStore.fetchFrontLanguages();
    })
</script>
<template>
    <div>
        <h1>{{ frontLang }}</h1>
        <h1>login page</h1>
    </div>
</template>