import { createApp, h } from 'vue'
import { createInertiaApp } from '@inertiajs/vue3'
import { createVuetify } from 'vuetify/lib/framework.mjs'
import { Link } from '@inertiajs/vue3';
import * as components from 'vuetify/components'
import * as directives from 'vuetify/directives'
import 'vuetify/styles'
import '@mdi/font/css/materialdesignicons.css'

const vuetify = createVuetify({
    components,
    directives,
  })

createInertiaApp({
  resolve: name => {
    const pages = import.meta.glob('./Pages/**/*.vue', { eager: true })
    return pages[`./Pages/${name}.vue`]
  },
  setup({ el, App, props, plugin }) {
    createApp({ render: () => h(App, props) })
      .use(plugin)
      .use(vuetify)
      .component('Link', Link)
      .mount(el)
  },
})