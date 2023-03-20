import http from "../http-common";

const HomeDataService = {
  home: function(params) {
    return http.get("home", { params });
  },
  get: function (id) {
    return http.get(`products/${id}`);
  }
}

export default HomeDataService