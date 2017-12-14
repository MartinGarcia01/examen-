(function () {
  'use strict';

  angular
  .module('app')
  .service('PublicacionService', publicacionService);

  publicacionService.$inject = ['$resource', 'API'];

  function publicacionService($resource, API) {
    return $resource(API + 'publicacion/:id', {id: '@id'});
  }
})();
