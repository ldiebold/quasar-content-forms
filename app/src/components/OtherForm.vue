<template>
  <q-form v-bind="$attrs">
    <q-card-section>
      <q-input
        v-model="form.name_of_sender"
        v-bind="props.inputProps"
        label="Your Name"
      />
      <q-input
        v-model="form.text"
        v-bind="props.inputProps"
        label="Tell us about the content..."
        class="q-mt-md"
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
      name_of_sender: '',
      text: ''
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
      return axios.post('http://127.0.0.1:8000/api/other-forms', form.value)
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
