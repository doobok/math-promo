import Axios from 'axios';

export default {
  state: {
    tuggleform: false,
    slug: ""
  },
  getters: {
    formstatus: state => {
      return state.tuggleform;
    },
    slug: state => {
      return state.slug;
    }
  },
  mutations: {
    SET_FORM_STATUS: (state, payload) => {
        state.tuggleform = payload;
    },
    SET_SLUG: (state, payload) => {
      state.slug = payload;
      // console.log(state.slug);
    },
  },
  actions: {
    TUGGLE_FORM : (context, payload) => {
      context.commit('SET_FORM_STATUS', payload);
    },
    // Сохранение фразы с кнопки
    PUSH_SLUG : (context, payload) => {
        context.commit('SET_SLUG', payload);
    },

    // отправка лида
    SEND_LEAD : (context, payload) => {
      console.log(payload);
      return Axios.post('http://tm.cam/api/v1/send-lead', payload)
      .then((response) => {
        // какоето действие из состоянием (оставил на будущее)
        // if (response.success === true) {
        //   context.commit('SOME_MUTATOR', response.data);
        // }
        return response.data
      })
      .catch(error => {
        // console.log(error);
        return error;
      });
    }

  }
}
