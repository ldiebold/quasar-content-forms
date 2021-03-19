<template>
  <q-page class="flex column flex-center">
    <h2 class="text-h2">
      Choose A Content Type
    </h2>
    <q-list
      style="min-width: 250px;"
      bordered
    >
      <b-dialog-button
        ref="dialogButton"
        no-caps
        label="Post"
        class="full-width"
        align="left"
      >
        <blog-form
          :input-props="{
            filled: true
          }"
          @success="response => $refs.dialogButton.hide()"
        />
      </b-dialog-button>
    </q-list>
  </q-page>
</template>

<script>
import { defineComponent, ref } from 'vue'
import BDialogButton from 'components/BDialogButton.vue'
import BlogForm from 'components/BlogForm.vue'

export default defineComponent({
  name: 'PageIndex',

  components: {
    BDialogButton,
    BlogForm
  },

  setup () {
    // axios.get('http://127.0.0.1:8000/sanctum/csrf-cookie').then(response => {

    // })
    const formTypes = ref([
      {
        label: 'Blog Post',
        to: '/forms/blog-post'
      },
      {
        label: 'Quasar Extension Feature',
        to: '/forms/extension-feature'
      }
    ])

    return {
      formTypes
    }
  }
})
</script>
