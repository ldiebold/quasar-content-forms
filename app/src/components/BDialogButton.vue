<template>
  <q-btn @click="showDialog = true">
    <q-dialog v-model="showDialog">
      <q-card class="bg-white">
        <slot />
      </q-card>
    </q-dialog>
  </q-btn>
</template>

<script>
import { ref } from 'vue'

export default {
  // name: 'ComponentName',
  setup () {
    const showDialog = ref(false)

    const hide = () => {
      showDialog.value = false
      return showDialog.value
    }

    return {
      showDialog,
      hide
    }
  }
}
</script>
