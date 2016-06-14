var app = angular.module('contactApp', []);
//angular.module('app', ['simple-slideshow']);

angular.module('slideShowExample' ['simple_slideshow']).controller('slideShowCtrl', ['$scope', function ($scope) {
    $scope.slides = [
        {name: 'Affordable Moving and Storage', url: 'images/AffordableMoving_logo.jpg'},
        {name: 'Bamboo Teak', url: 'images/BambooTeak.jpg'},
        {name: 'Culinary Direct', url: 'images/CulinaryDirect_logo.jpg'},
        {name: 'Peter Phillops Chiropractic', url: 'images/PeterPhillops.jpg'}
    ]
}]);
