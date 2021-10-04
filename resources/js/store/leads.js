import Axios from 'axios';

export default {
  state: {
    tuggleform: false,
    vars: {
      marker: "",
      priceid: "",
      cost: 0,
    }
  },
  getters: {
    formstatus: state => {
      return state.tuggleform;
    },
    vars: state => {
      return state.vars;
    }
  },
  mutations: {
    SET_FORM_STATUS: (state, payload) => {
        state.tuggleform = payload;
    },
    SET_VARS: (state, payload) => {
      state.vars = payload;
    },
  },
  actions: {
    TUGGLE_FORM : (context, payload) => {
      context.commit('SET_FORM_STATUS', payload);
    },
    // Сохранение фразы с кнопки
    PUSH_VARS : (context, payload) => {
        context.commit('SET_VARS', payload);
    },

    // отправка лида
    SEND_LEAD : (context, payload) => {
      console.log(payload);
      return Axios.post('https://tutor-math.com.ua/api/v1/send-lead', payload)
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
