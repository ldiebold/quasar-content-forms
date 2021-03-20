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
        v-for="form in formTypes"
        :key="form.label"
        ref="dialogButton"
        flat
        no-caps
        :label="form.label"
        class="full-width"
        align="left"
      >
        <component
          :is="form.is"
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
import { defineComponent, shallowRef } from 'vue'
import BDialogButton from 'components/BDialogButton.vue'
import BlogForm from 'components/BlogForm.vue'
import NewExtensionForm from 'components/NewExtensionForm.vue'
import ExtensionFeatureForm from 'components/ExtensionFeatureForm.vue'
import ShowcaseForm from 'components/ShowcaseForm.vue'
import OtherForm from 'components/OtherForm.vue'
import NewsForm from 'components/NewsForm.vue'

export default defineComponent({
  name: 'PageIndex',

  components: {
    BDialogButton
  },

  setup () {
    // axios.get('http://127.0.0.1:8000/sanctum/csrf-cookie').then(response => {

    // })
    const formTypes = shallowRef([
      {
        label: 'Blog Post',
        is: BlogForm
      },
      {
        label: 'New Extension',
        is: NewExtensionForm
      },
      {
        label: 'Extension Feature',
        is: ExtensionFeatureForm
      },
      {
        label: 'Showcase (Cool Project)',
        is: ShowcaseForm
      },
      {
        label: 'News',
        is: NewsForm
      },
      {
        label: 'Other',
        is: OtherForm
      }
    ])

    return {
      formTypes
    }
  }
})
</script>
