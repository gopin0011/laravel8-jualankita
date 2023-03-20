import axios from "../axios";

const actions = {
    // main request
    getCategory({ commit , state }) {
      return new Promise((resolve, reject) => {
        axios
          .get("/header/megamenu")
          .then(response => {
            if(response.data.code == 200){
              commit("SET_CATEGORY", response.data.data);
            }
            resolve(response);
          })
          .catch(error => {
            toastr.info("CATEGORY MEGA MENU "+state.config.errorAction.errorConnection)
            reject(error);
          });
      });
    },
    getNotif({ commit , state }) {
      return new Promise((resolve, reject) => {
        axios
          .get("/buyer/dashboard/notification/new")
          .then(response => {
            if(response.data.code == 200){
              commit("SET_NOTIF", response.data.data.new_notification);
            }
            resolve(response);
          })
          .catch(error => {
            reject(error);
          });
      });
    },
    getAutoComplate({ commit, state },item) {
      return new Promise((resolve, reject) => {
        axios
          .get("/header/search/autocomplete?search="+item)
          .then(response => {
            if(response.data.code == 200){
              commit("SET_AUTOCOMPLATE", response.data.data);
            }
            resolve(response);
          })
          .catch(error => {
            reject(error);
          });
      });
    },
    toggleBlocking({ commit }, data) {
      return new Promise((resolve) => {
        commit("TOGGLE_BLOCKING",data);
        resolve(data)
      });
    },
}

export default actions