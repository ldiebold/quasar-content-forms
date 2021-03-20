<template>
  <q-form v-bind="$attrs">
    <q-card-section>
      <q-input
        v-model="form.what_changed"
        v-bind="props.inputProps"
        label="what_changed"
        type="textarea"
      />
      <q-input
        v-model="form.link"
        v-bind="props.inputProps"
        class="q-mt-md"
        label="link"
      />
      <q-input
        v-model="form.author"
        v-bind="props.inputProps"
        class="q-mt-md"
        label="author"
      />
      <q-input
        v-model="form.comments"
        v-bind="props.inputProps"
        class="q-mt-md"
        label="comments"
        type="textarea"
      />
    </q-card-section>
    <q-btn
      class="full-width q-mt-md"
      color="primary"
      label="submit"
      :loading="submitting"
      @click="createFormRequest"
    />
  </q-form>
</template>

<script>
import { ref } from 'vue'
import axios from 'axios'
import { useQuasar } from 'quasar'

export default {
  // name: 'ComponentName',
  props: {
    inputProps: {
      type: Object,
      default () {
        return {

        }
      }
    }
  },

  emits: [
    'success'
  ],

  setup (props, { emit }) {
    const $q = useQuasar()

    const form = ref({
      what_changed: '',
      link: '',
      author: '',
      comments: ''
    })

    const submitting = ref(false)
    const handleSubmitSuccess = (response) => {
      emit('success', response)

      $q.notify({
        color: 'green',
        message: 'Sweet! Thanks, for sending me the update!'
      })
    }

    const createFormRequest = () => {
      return axios.post('http://127.0.0.1:8000/api/extension-feature-forms', form.value)
        .then(handleSubmitSuccess)
    }

    return {
      submitting,
      createFormRequest,
      form,
      props
    }
  }
}
</script>
