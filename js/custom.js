	function productType(type){


		switch (type) {
    case 'food':
        document.getElementById("productInsertFood").style.display = 'block';
        document.getElementById("productInsertElet").style.display = 'none';
        break;
    case 'eletronics':
        document.getElementById("productInsertElet").style.display = "block";
        document.getElementById("productInsertFood").style.display = 'none';
        break;
	}


	}