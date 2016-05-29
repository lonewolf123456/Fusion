Fusion.controller('productController', ['$scope', '$http', function ($scope, $http) {

    function uniq(a) {
        var seen = {};
        var out = [];
        var len = a.length;
        var j = 0;
        for (var i = 0; i < len; i++) {
            var item = a[i];
            if (seen[item] !== 1) {
                seen[item] = 1;
                out[j++] = item;
            }
        }
        return out;
    }




    function createAttrsHash(product, skus) {
        var a = {};

        $.each(product.attributes, function (i, value) {

            a[value] = [];


            $.each(product.skus.data, function (i, e) {

                a[value].push(e.attributes[value]);

                if ((typeof skus[e.attributes[value]]) == 'undefined') {

                    skus[e.attributes[value]] = [];
                }

                skus[e.attributes[value]].push(e.id);
            });

            a[value] = uniq(a[value]);
        });





        return a;
    }


    function getSku(skus, a) {
        var atts = [],
            set = [],
            sku;

        $('.skuAttribute').each(function (i, e) {
            atts.push($(this).val());
        })

        $.each(atts, function (i, e) {
            set.push(skus[e]);
        })



        sku = _.intersection.apply(null, set)[0];


        return _.where(a, { id: sku });


    }


    $http({
        method: 'GET',
        url: 'http://localhost:33869/index.php/product/get'
    }).then(function success(resp) {

        $scope.products = resp.data.data;



    }, function failure(resp) {

    });


    $scope.quickShop = {
        product: {}
    };

    $scope.quickShop.groupSkus = {

    }


    $scope.showMoreProducts = function (limit, offset) {

        $http({
            method: 'GET',
            url: ''
        }).then(function success(resp) { }, function failure(resp) { });
    };
    var qs = $('#quick-shop');

    $scope.showQuickShop = function ($index, callback) {

        $scope.quickShop.product = $scope.products[$index];

        $scope.quickShop.product.attrs = createAttrsHash($scope.quickShop.product, $scope.quickShop.groupSkus);

        qs.fadeIn();

    }

    $scope.addToCart = function () {

        var sku;

        sku = getSku($scope.quickShop.groupSkus, $scope.quickShop.product.skus.data)[0];

        

        $.post("http://localhost:33869/index.php/product/addProductToCart", { parent: sku.id, quantity: 12, price: sku.price, 'product_name': $scope.quickShop.product.name });

    };
} ])