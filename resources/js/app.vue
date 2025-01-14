<script setup>
    import { onMounted } from 'vue';
    import { storeToRefs } from 'pinia';
    import { useAppStore } from '@/store/useAppStore';

	import Body from '@/components/Body.vue';
	import Login from '@/components/Auth/Login.vue';
    
    const appStore = useAppStore();
    const { isLoggedIn, authUser } = storeToRefs(appStore);

    onMounted(() => {
        appStore.fetchUserInfo();
    })
</script>

<template>
    <div class="w-screen h-screen">
        <template v-if="isLoggedIn">
            <Body />
        </template>
        <template v-else>
            <Login />
        </template>
    </div>
</template>
