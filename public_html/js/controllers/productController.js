Fusion.controller('productController', ['$scope', '$http', function ($scope, $http) {
    $scope.products = [

	{

	    img: 'http://demandware.edgesuite.net/aakh_prd/on/demandware.static/-/Sites-main/default/dw900b0160/images/large_gray/37-9201_748_FRONT.jpg',
	    name: 'Julian Chest',
	    description: 'Clean, simple, and beautiful. Inspired by eighteenth century French antiques we saw in Paris, the Julian chest is elegantly fashioned with rounded corners and fluted legs. With three drawers, it’s a stylish storage solution for many settings.',
	    price: '1304.00',
	    origPrice: '',
	    colors: []
	},

	{

	    img: 'http://demandware.edgesuite.net/aakh_prd/on/demandware.static/-/Sites-main/default/dwc27516fb/images/large_gray/04-5405M_5405B_front.jpg',
	    name: 'Stellar Plush Mattres',
	    description: 'SLEEP BY DESIGN™ ETHAN ALLEN Our mattresses are designed for a well-rested life. Our offerings include innerspring, gel, and latex constructions in ultra plush to firm options. American Craftsmanship. CertiPur-US Certified Foams. Premier home delivery, setup, & removal.',
	    price: '',
	    origPrice: '',
	    colors: []
	}];

    $scope.quickShop = {
        product: {}
    };


    $scope.showMoreProducts = function (limit, offset) {

        $http.get({
            method: 'GET',
            url: ''
        }).then(function success(resp) { }, function failure(resp) { });
    };
    var qs = $('#quick-shop');

    $scope.showQuickShop = function ($index, callback) {

        $scope.quickShop.product = $scope.products[$index];

        qs.fadeIn();

    }
} ])