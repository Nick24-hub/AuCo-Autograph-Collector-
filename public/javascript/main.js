let products = [];

function getProducts() {
    const response = fetch(`http:../FunClo_Alexandrescu_Nicolae_Vacaru_Robert_2A4/methods/getProducts.php`)
        .then((res) => res.json())
        .then((res) => {
            for (let i = 0; i < res.length; ++i) {
                products[i] =
                {
                    id: res[i].id,
                    title: res[i].title,
                    details: res[i].details,
                    price: parseFloat(res[i].price),
                    inCart: 0
                };
            }
        })
};

getProducts();

var i;


function removeToCart(i) {
    removeItemTotalCost(products[i]);
    removeCartItem(products[i]);
    document.location.reload(true);
}

function addToCart(i) {
    cartNumbers(products[i]);
    totalCost(products[i]);
}

function multipleAddToCart(i) {
    let cartItems = localStorage.getItem('productsInCart');
    cartItems = JSON.parse(cartItems);
    var number = document.getElementById("amount");

    for (let j = 0; j < number.value; ++j) {
        cartNumbers(products[i]);
        totalCost(products[i]);
    }
    document.location.reload(true);
}

function changeToCart(i) {
    let cartItems = localStorage.getItem('productsInCart');
    cartItems = JSON.parse(cartItems);
    var x;
    if (cartItems != null) {
        x = cartItems[products[i].id].inCart;
    } else x = 0;
    var number = document.getElementById("amount");
    if (number.value > x) {
        for (let j = 0; j < number.value - x; ++j) {
            cartNumbers(products[i]);
            totalCost(products[i]);
        }
    }
    else if (number.value < x) {
        for (let j = 0; j < x - number.value; ++j) {
            removeCartNumbers(products[i]);
            removeTotalCost(products[i]);
        }
    }
    document.location.reload(true);
}



function onLoadCartNumbers() {
    let productNumbers = localStorage.getItem('cartNumbers');

    if (productNumbers) {
        document.querySelector('.navbar span').textContent = productNumbers;
    }
}

function removeCartItem(product) {
    let cartItems = localStorage.getItem('productsInCart');
    cartItems = JSON.parse(cartItems);
    var x = cartItems[product.id].inCart;
    let productNumbers = localStorage.getItem('cartNumbers');

    productNumbers = parseInt(productNumbers);

    localStorage.setItem('cartNumbers', productNumbers - x);
    document.querySelector('.navbar span').textContent = productNumbers - x;

    removeItem(product);
}

function removeCartNumbers(product) {

    let productNumbers = localStorage.getItem('cartNumbers');

    productNumbers = parseInt(productNumbers);

    if (productNumbers > 1) {
        localStorage.setItem('cartNumbers', productNumbers - 1);
        document.querySelector('.navbar span').textContent = productNumbers - 1;
    } else {
        localStorage.setItem('cartNumbers', 1);
        document.querySelector('.navbar span').textContent = 1;
    }

    removeSetItems(product);
}

function cartNumbers(product) {

    let productNumbers = localStorage.getItem('cartNumbers');

    productNumbers = parseInt(productNumbers);

    if (productNumbers) {
        localStorage.setItem('cartNumbers', productNumbers + 1);
        document.querySelector('.navbar span').textContent = productNumbers + 1;
    } else {
        localStorage.setItem('cartNumbers', 1);
        document.querySelector('.navbar span').textContent = 1;
    }

    setItems(product);
}

function removeItem(product) {
    let productNumbers = localStorage.getItem('cartNumbers');
    let cartItems = localStorage.getItem('productsInCart');
    cartItems = JSON.parse(cartItems);

    delete cartItems[product.id];

    localStorage.setItem("productsInCart", JSON.stringify(cartItems));
    if (parseInt(productNumbers) == 0)
        localStorage.clear();
}

function removeSetItems(product) {
    let cartItems = localStorage.getItem('productsInCart');
    cartItems = JSON.parse(cartItems);

    if (cartItems != null) {
        cartItems[product.id].inCart -= 1;
    } else {
        product.inCart = 1;

        cartItems = {
            [product.id]: product
        }
    }

    localStorage.setItem("productsInCart", JSON.stringify(cartItems));
}

function setItems(product) {
    let cartItems = localStorage.getItem('productsInCart');
    cartItems = JSON.parse(cartItems);

    if (cartItems != null) {

        if (cartItems[product.id] == undefined) {
            cartItems = {
                ...cartItems,
                [product.id]: product
            }
        }
        cartItems[product.id].inCart += 1;
    } else {
        product.inCart = 1;

        cartItems = {
            [product.id]: product
        }
    }

    localStorage.setItem("productsInCart", JSON.stringify(cartItems));
}

function removeItemTotalCost(product) {
    let cartItems = localStorage.getItem('productsInCart');
    cartItems = JSON.parse(cartItems);
    var x = cartItems[product.id].inCart;
    let cartCost = localStorage.getItem('totalCost');
    cartCost = parseFloat(cartCost);
    localStorage.setItem("totalCost", (1000 * cartCost - 1000 * product.price * x) / 1000);
}

function removeTotalCost(product) {

    let cartCost = localStorage.getItem('totalCost');

    if (cartCost != null) {
        cartCost = parseFloat(cartCost);
        localStorage.setItem("totalCost", (1000 * cartCost - 1000 * product.price) / 1000);
    } else {
        localStorage.setItem("totalCost", parseFloat(product.price));
    }

}

function totalCost(product) {

    let cartCost = localStorage.getItem('totalCost');

    if (cartCost != null) {
        cartCost = parseFloat(cartCost);
        localStorage.setItem("totalCost", (1000 * cartCost + 1000 * product.price) / 1000);
    } else {
        localStorage.setItem("totalCost", parseFloat(product.price));
    }

}


function displayCart() {
    let cartItems = localStorage.getItem("productsInCart");
    cartItems = JSON.parse(cartItems);

    let productContainer = document.querySelector(".x");
    let totalContainer = document.querySelector(".total-price");
    let buy = document.querySelector(".buy");
    let buy1 = document.querySelector(".buy1");
    let cartCost = localStorage.getItem('totalCost');

    if (cartItems && productContainer) {
        productContainer.innerHTML = `
            <tr>
                <th>Product</th>
                <th>Quantity</th>
                <th>Subtotal</th>
            </tr>
            `;
        Object.values(cartItems).map(item => {
            productContainer.innerHTML += `
            <tr>
                <td>
                    <div class="cart-info">
                        <a href="product-details-${item.id}.php">
                            <img src="images/product${item.id}.jpg">
                        </a>
                        <div>
                            <p>${item.title}</p>
                            <small>Price: ${item.price}</small>
                            <br>
                            <a onclick="removeToCart(${item.id - 1})">Remove</a>
                        </div>
                    </div>
                </td>
                <td><input id="amount" onchange="changeToCart(${item.id - 1})" type="number" value="${item.inCart}"></td>
                <td>$${(item.price * 1000 * item.inCart) / 1000}</td>
            </tr>
            `;
        });

        var transp = 35.0;

        totalContainer.innerHTML += `
        <div class="total-price">
        <table>
            <tr>
                <td>Subtotal</td>
                <td>$${cartCost}</td>
            </tr>
            <tr>
                <td>Transport</td>
                <td>$35</td>
            </tr>
            <tr>
                <td>Total</td>
                <td>$${(1000 * cartCost + 1000 * transp) / 1000}</td>
            </tr>
        </table>
        </div>
        `;
        if (buy1 == null) {
            buy.innerHTML += `
                <a href="submit-order.php">Buy</a>
        `;
        }
        else {
            buy1.innerHTML += `
                <a href="account.php">Login First</a>
        `;
        }

    }
}
function clearLogout()
{
    localStorage.clear();
}
function submit() {
    console.log("1");
    var Customer_ = {};
    Customer_.Name = $("#name").val();
    Customer_.Address = $("#address").val();

    var ItemId = "Cst" + Customer_.Name;
    localStorage.setItem(ItemId, JSON.stringify(Customer_));
    
};

onLoadCartNumbers();
displayCart();