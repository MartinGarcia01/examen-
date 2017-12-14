(function () {
  'use strict';

  angular
  .module('app')
  .component('publicacion', {
    templateUrl: 'app/components/publicacion/publicacion.html',
    controller: publicacionCtrl,
    controllerAs: 'vm'
  });

  publicacionCtrl.$inject = ['PublicacionService'];

  function publicacionCtrl(PublicacionService) {
    var vm = this;

    vm.publicacion = [];

    PublicacionService.query().$promise.then(function (data) {
      vm.publicacion = data;
    });
  }
})();
