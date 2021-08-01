// start here

document.addEventListener('alpine:init', () => {

	Alpine.data('cartData', () => ({
		cartList: [],
		total: 0,
		init() {
			this.getData();
			this.$watch('cartList', () => {
				this.updateTotal();
			});
		},
		getData() {
			this.$store.api.getListCart(response => {
				if(response.data)  {
					this.cartList = response.data;
				}
				else {
					this.cartList = [];
				}
			});
		},
		updateTotal() {
			this.total = 0;
			this.cartList.forEach((item, index) => {
				this.total += (item.qty * item.product.price);
			});
		},
		onChangeQty(item, value) {
			item.qty = item.qty+value;
			this.validateQty(item);
		},
		onLike(item) {
			item.product.like_count= !(item.product.like_count);
		},
		onRemove(index) {
			this.cartList.splice(index, 1);
		},
		validateQty(item) {
			var qty = item.qty;
			if (qty <= 1) {
				qty = 1;
			}
			if (qty >= 99) {
				qty = 99;
			}
			item.qty = qty;
			this.updateTotal();
		}
	}));

	Alpine.store('api', {
		apiLoading:false,
		callApi(theUrl, callback) {
			this.apiLoading = true;
			var xmlHttp = new XMLHttpRequest();
			xmlHttp.onreadystatechange = () => { 
				this.apiLoading = false;
				if (xmlHttp.readyState == 4 && xmlHttp.status == 200)
					callback(JSON.parse(xmlHttp.responseText));
			};
			xmlHttp.open("GET", theUrl, true); // true for asynchronous 
			xmlHttp.send(null);
		},
		getListCart(response) {
			this.callApi('/api/cart', response);
		}
	});

	Alpine.store('filter', {
		numberOnly(evt) {
			var theEvent = evt || window.event;
		
			// Handle paste
			if (theEvent.type === 'paste') {
					key = event.clipboardData.getData('text/plain');
			} else {
			// Handle key press
					var key = theEvent.keyCode || theEvent.which;
					key = String.fromCharCode(key);
			}
			var regex = /[0-9]|\./;
			if( !regex.test(key) ) {
				theEvent.returnValue = false;
				if(theEvent.preventDefault) theEvent.preventDefault();
			}
		},
		currencyFormat(x, separator) {
			if (!separator) {
				separator='.';
			}
			return x.toString().replace(/\B(?=(\d{3})+(?!\d))/g,  separator);
		}
	});

	Alpine.store('file', {
		getImage(file) {
			return 'uploads/'+file;
		}
	});
})