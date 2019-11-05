---
title: API Reference

language_tabs:
- bash
- javascript

includes:

search: true

toc_footers:
- <a href='http://github.com/mpociot/documentarian'>Documentation Powered by Documentarian</a>
---
<!-- START_INFO -->
# Info

Welcome to the generated API reference.
[Get Postman Collection](http://localhost/docs/collection.json)

<!-- END_INFO -->

#Device management


<!-- START_9a9914f19b1f1997ac37f622aafe172d -->
## Display a listing of the resource.

> Example request:

```bash
curl -X GET -G "http://localhost/api/device" 
```

```javascript
const url = new URL("http://localhost/api/device");

let headers = {
    "Accept": "application/json",
    "Content-Type": "application/json",
}

fetch(url, {
    method: "GET",
    headers: headers,
})
    .then(response => response.json())
    .then(json => console.log(json));
```


> Example response (200):

```json
[
    {
        "id": 31,
        "type": "phone",
        "serial_number": "83473-22944",
        "imei_number": "982833801312371",
        "manufacturer": "Huawei",
        "model": "P10",
        "operating_system": "Android",
        "created_at": "2019-11-05 03:15:35",
        "updated_at": "2019-11-05 03:15:35"
    },
    {
        "id": 39,
        "type": "phone",
        "serial_number": "37970-92645",
        "imei_number": "357802937311776",
        "manufacturer": "Galaxy",
        "model": "J4+",
        "operating_system": "Android",
        "created_at": "2019-11-05 03:15:35",
        "updated_at": "2019-11-05 03:15:35"
    },
    {
        "id": 38,
        "type": "phone",
        "serial_number": "51079-42832",
        "imei_number": "744047223933914",
        "manufacturer": "Huawei",
        "model": "P10",
        "operating_system": "Android",
        "created_at": "2019-11-05 03:15:35",
        "updated_at": "2019-11-05 03:15:35"
    },
    {
        "id": 37,
        "type": "phone",
        "serial_number": "85443-58544",
        "imei_number": "249559090646963",
        "manufacturer": "Apple",
        "model": "iPhone 10",
        "operating_system": "iOS",
        "created_at": "2019-11-05 03:15:35",
        "updated_at": "2019-11-05 03:15:35"
    },
    {
        "id": 36,
        "type": "tablet",
        "serial_number": "49762-52961",
        "imei_number": "465737708647394",
        "manufacturer": "Apple",
        "model": "iPad Air",
        "operating_system": "iOS",
        "created_at": "2019-11-05 03:15:35",
        "updated_at": "2019-11-05 03:15:35"
    },
    {
        "id": 35,
        "type": "tablet",
        "serial_number": "78038-84482",
        "imei_number": "518948457896547",
        "manufacturer": "Google",
        "model": "Nexus 7",
        "operating_system": "Android",
        "created_at": "2019-11-05 03:15:35",
        "updated_at": "2019-11-05 03:15:35"
    },
    {
        "id": 34,
        "type": "tablet",
        "serial_number": "18111-98307",
        "imei_number": "146033038154065",
        "manufacturer": "Google",
        "model": "Nexus 7",
        "operating_system": "Android",
        "created_at": "2019-11-05 03:15:35",
        "updated_at": "2019-11-05 03:15:35"
    },
    {
        "id": 33,
        "type": "phone",
        "serial_number": "31285-16953",
        "imei_number": "362697417418181",
        "manufacturer": "Huawei",
        "model": "P10",
        "operating_system": "Android",
        "created_at": "2019-11-05 03:15:35",
        "updated_at": "2019-11-05 03:15:35"
    },
    {
        "id": 32,
        "type": "phone",
        "serial_number": "62482-43359",
        "imei_number": "673498121251990",
        "manufacturer": "Apple",
        "model": "iPhone 10",
        "operating_system": "iOS",
        "created_at": "2019-11-05 03:15:35",
        "updated_at": "2019-11-05 03:15:35"
    },
    {
        "id": 40,
        "type": "tablet",
        "serial_number": "83533-33357",
        "imei_number": "413160877788178",
        "manufacturer": "Apple",
        "model": "iPad Air",
        "operating_system": "iOS",
        "created_at": "2019-11-05 03:15:35",
        "updated_at": "2019-11-05 03:15:35"
    },
    {
        "id": 20,
        "type": "phone",
        "serial_number": "97003-20739",
        "imei_number": "911411767789174",
        "manufacturer": "Apple",
        "model": "iPhone 10",
        "operating_system": "iOS",
        "created_at": "2019-11-05 03:15:34",
        "updated_at": "2019-11-05 03:15:34"
    },
    {
        "id": 22,
        "type": "tablet",
        "serial_number": "20955-84435",
        "imei_number": "801343288576741",
        "manufacturer": "Google",
        "model": "Nexus 7",
        "operating_system": "Android",
        "created_at": "2019-11-05 03:15:34",
        "updated_at": "2019-11-05 03:15:34"
    },
    {
        "id": 23,
        "type": "phone",
        "serial_number": "56513-98351",
        "imei_number": "922539265316913",
        "manufacturer": "Galaxy",
        "model": "J4+",
        "operating_system": "Android",
        "created_at": "2019-11-05 03:15:34",
        "updated_at": "2019-11-05 03:15:34"
    },
    {
        "id": 24,
        "type": "tablet",
        "serial_number": "66577-30697",
        "imei_number": "583091400404807",
        "manufacturer": "Google",
        "model": "Nexus 7",
        "operating_system": "Android",
        "created_at": "2019-11-05 03:15:34",
        "updated_at": "2019-11-05 03:15:34"
    },
    {
        "id": 25,
        "type": "phone",
        "serial_number": "61219-73219",
        "imei_number": "139933430538224",
        "manufacturer": "Huawei",
        "model": "P10",
        "operating_system": "Android",
        "created_at": "2019-11-05 03:15:34",
        "updated_at": "2019-11-05 03:15:34"
    },
    {
        "id": 26,
        "type": "tablet",
        "serial_number": "49226-26112",
        "imei_number": "159872778923000",
        "manufacturer": "Google",
        "model": "Nexus 7",
        "operating_system": "Android",
        "created_at": "2019-11-05 03:15:34",
        "updated_at": "2019-11-05 03:15:34"
    },
    {
        "id": 27,
        "type": "phone",
        "serial_number": "30871-58514",
        "imei_number": "449666973651366",
        "manufacturer": "Galaxy",
        "model": "J4+",
        "operating_system": "Android",
        "created_at": "2019-11-05 03:15:34",
        "updated_at": "2019-11-05 03:15:34"
    },
    {
        "id": 28,
        "type": "tablet",
        "serial_number": "87221-76629",
        "imei_number": "279621259086410",
        "manufacturer": "Google",
        "model": "Nexus 7",
        "operating_system": "Android",
        "created_at": "2019-11-05 03:15:34",
        "updated_at": "2019-11-05 03:15:34"
    },
    {
        "id": 29,
        "type": "tablet",
        "serial_number": "54673-25040",
        "imei_number": "789141067550746",
        "manufacturer": "Google",
        "model": "Nexus 7",
        "operating_system": "Android",
        "created_at": "2019-11-05 03:15:34",
        "updated_at": "2019-11-05 03:15:34"
    },
    {
        "id": 30,
        "type": "phone",
        "serial_number": "18137-82765",
        "imei_number": "647286533901136",
        "manufacturer": "Apple",
        "model": "iPhone 10",
        "operating_system": "iOS",
        "created_at": "2019-11-05 03:15:34",
        "updated_at": "2019-11-05 03:15:34"
    },
    {
        "id": 21,
        "type": "phone",
        "serial_number": "31672-33556",
        "imei_number": "258774854307043",
        "manufacturer": "Galaxy",
        "model": "J4+",
        "operating_system": "Android",
        "created_at": "2019-11-05 03:15:34",
        "updated_at": "2019-11-05 03:15:34"
    },
    {
        "id": 11,
        "type": "tablet",
        "serial_number": "98477-41928",
        "imei_number": "669563265619987",
        "manufacturer": "Apple",
        "model": "iPad Air",
        "operating_system": "iOS",
        "created_at": "2019-11-05 03:15:34",
        "updated_at": "2019-11-05 03:15:34"
    },
    {
        "id": 12,
        "type": "phone",
        "serial_number": "91489-42035",
        "imei_number": "140145055415973",
        "manufacturer": "Galaxy",
        "model": "J4+",
        "operating_system": "Android",
        "created_at": "2019-11-05 03:15:34",
        "updated_at": "2019-11-05 03:15:34"
    },
    {
        "id": 13,
        "type": "tablet",
        "serial_number": "93026-53169",
        "imei_number": "998769323734208",
        "manufacturer": "Google",
        "model": "Nexus 7",
        "operating_system": "Android",
        "created_at": "2019-11-05 03:15:34",
        "updated_at": "2019-11-05 03:15:34"
    },
    {
        "id": 14,
        "type": "tablet",
        "serial_number": "98860-10127",
        "imei_number": "323218136976987",
        "manufacturer": "Apple",
        "model": "iPad Air",
        "operating_system": "iOS",
        "created_at": "2019-11-05 03:15:34",
        "updated_at": "2019-11-05 03:15:34"
    },
    {
        "id": 15,
        "type": "phone",
        "serial_number": "88147-99526",
        "imei_number": "968289407766325",
        "manufacturer": "Huawei",
        "model": "P10",
        "operating_system": "Android",
        "created_at": "2019-11-05 03:15:34",
        "updated_at": "2019-11-05 03:15:34"
    },
    {
        "id": 16,
        "type": "tablet",
        "serial_number": "12915-50636",
        "imei_number": "604493208845379",
        "manufacturer": "Google",
        "model": "Nexus 7",
        "operating_system": "Android",
        "created_at": "2019-11-05 03:15:34",
        "updated_at": "2019-11-05 03:15:34"
    },
    {
        "id": 17,
        "type": "phone",
        "serial_number": "88541-92972",
        "imei_number": "421042070697438",
        "manufacturer": "Apple",
        "model": "iPhone 6",
        "operating_system": "iOS",
        "created_at": "2019-11-05 03:15:34",
        "updated_at": "2019-11-05 03:15:34"
    },
    {
        "id": 18,
        "type": "phone",
        "serial_number": "99151-90909",
        "imei_number": "690081811756484",
        "manufacturer": "Apple",
        "model": "iPhone 6",
        "operating_system": "iOS",
        "created_at": "2019-11-05 03:15:34",
        "updated_at": "2019-11-05 03:15:34"
    },
    {
        "id": 19,
        "type": "tablet",
        "serial_number": "25979-14102",
        "imei_number": "948894570566905",
        "manufacturer": "Apple",
        "model": "iPad Air",
        "operating_system": "iOS",
        "created_at": "2019-11-05 03:15:34",
        "updated_at": "2019-11-05 03:15:34"
    },
    {
        "id": 1,
        "type": "tablet",
        "serial_number": "14166-10366",
        "imei_number": "423655975731267",
        "manufacturer": "Apple",
        "model": "iPad Air",
        "operating_system": "iOS",
        "created_at": "2019-11-05 03:14:23",
        "updated_at": "2019-11-05 03:14:23"
    },
    {
        "id": 10,
        "type": "phone",
        "serial_number": "47194-83909",
        "imei_number": "748206988968822",
        "manufacturer": "Galaxy",
        "model": "J4+",
        "operating_system": "Android",
        "created_at": "2019-11-05 03:14:23",
        "updated_at": "2019-11-05 03:14:23"
    },
    {
        "id": 9,
        "type": "phone",
        "serial_number": "76597-79453",
        "imei_number": "470215632464117",
        "manufacturer": "Apple",
        "model": "iPhone 10",
        "operating_system": "iOS",
        "created_at": "2019-11-05 03:14:23",
        "updated_at": "2019-11-05 03:14:23"
    },
    {
        "id": 8,
        "type": "phone",
        "serial_number": "92817-62749",
        "imei_number": "173692103861454",
        "manufacturer": "Galaxy",
        "model": "J4+",
        "operating_system": "Android",
        "created_at": "2019-11-05 03:14:23",
        "updated_at": "2019-11-05 03:14:23"
    },
    {
        "id": 7,
        "type": "tablet",
        "serial_number": "41164-26631",
        "imei_number": "126862920214866",
        "manufacturer": "Google",
        "model": "Nexus 7",
        "operating_system": "Android",
        "created_at": "2019-11-05 03:14:23",
        "updated_at": "2019-11-05 03:14:23"
    },
    {
        "id": 6,
        "type": "tablet",
        "serial_number": "60821-94355",
        "imei_number": "671339892563000",
        "manufacturer": "Apple",
        "model": "iPad Air",
        "operating_system": "iOS",
        "created_at": "2019-11-05 03:14:23",
        "updated_at": "2019-11-05 03:14:23"
    },
    {
        "id": 5,
        "type": "tablet",
        "serial_number": "49259-81975",
        "imei_number": "238690109988708",
        "manufacturer": "Apple",
        "model": "iPad Air",
        "operating_system": "iOS",
        "created_at": "2019-11-05 03:14:23",
        "updated_at": "2019-11-05 03:14:23"
    },
    {
        "id": 4,
        "type": "phone",
        "serial_number": "81291-92832",
        "imei_number": "264905724741705",
        "manufacturer": "Apple",
        "model": "iPhone 10",
        "operating_system": "iOS",
        "created_at": "2019-11-05 03:14:23",
        "updated_at": "2019-11-05 03:14:23"
    },
    {
        "id": 3,
        "type": "phone",
        "serial_number": "49718-77484",
        "imei_number": "153013852342808",
        "manufacturer": "Huawei",
        "model": "P10",
        "operating_system": "Android",
        "created_at": "2019-11-05 03:14:23",
        "updated_at": "2019-11-05 03:14:23"
    },
    {
        "id": 2,
        "type": "phone",
        "serial_number": "55684-56546",
        "imei_number": "732224600351005",
        "manufacturer": "Huawei",
        "model": "P10",
        "operating_system": "Android",
        "created_at": "2019-11-05 03:14:23",
        "updated_at": "2019-11-05 03:14:23"
    }
]
```

### HTTP Request
`GET api/device`


<!-- END_9a9914f19b1f1997ac37f622aafe172d -->

<!-- START_a815cdd6f24022c016224199e8f63426 -->
## Store a newly created resource in storage.

> Example request:

```bash
curl -X POST "http://localhost/api/device" 
```

```javascript
const url = new URL("http://localhost/api/device");

let headers = {
    "Accept": "application/json",
    "Content-Type": "application/json",
}

fetch(url, {
    method: "POST",
    headers: headers,
})
    .then(response => response.json())
    .then(json => console.log(json));
```



### HTTP Request
`POST api/device`


<!-- END_a815cdd6f24022c016224199e8f63426 -->

<!-- START_2609df1b39cfe7c1444b1cb3c5b37b5a -->
## Display the specified resource.

> Example request:

```bash
curl -X GET -G "http://localhost/api/device/1" 
```

```javascript
const url = new URL("http://localhost/api/device/1");

let headers = {
    "Accept": "application/json",
    "Content-Type": "application/json",
}

fetch(url, {
    method: "GET",
    headers: headers,
})
    .then(response => response.json())
    .then(json => console.log(json));
```


> Example response (200):

```json
{
    "id": 1,
    "type": "tablet",
    "serial_number": "14166-10366",
    "imei_number": "423655975731267",
    "manufacturer": "Apple",
    "model": "iPad Air",
    "operating_system": "iOS",
    "created_at": "2019-11-05 03:14:23",
    "updated_at": "2019-11-05 03:14:23"
}
```

### HTTP Request
`GET api/device/{device}`


<!-- END_2609df1b39cfe7c1444b1cb3c5b37b5a -->

<!-- START_df7e3ffbb9771f403f7c9670494e679b -->
## Update the specified resource in storage.

> Example request:

```bash
curl -X PUT "http://localhost/api/device/1" 
```

```javascript
const url = new URL("http://localhost/api/device/1");

let headers = {
    "Accept": "application/json",
    "Content-Type": "application/json",
}

fetch(url, {
    method: "PUT",
    headers: headers,
})
    .then(response => response.json())
    .then(json => console.log(json));
```



### HTTP Request
`PUT api/device/{device}`

`PATCH api/device/{device}`


<!-- END_df7e3ffbb9771f403f7c9670494e679b -->

<!-- START_bece7ab77641bfb467ed3cabdb0c5b03 -->
## Remove the specified resource from storage.

> Example request:

```bash
curl -X DELETE "http://localhost/api/device/1" 
```

```javascript
const url = new URL("http://localhost/api/device/1");

let headers = {
    "Accept": "application/json",
    "Content-Type": "application/json",
}

fetch(url, {
    method: "DELETE",
    headers: headers,
})
    .then(response => response.json())
    .then(json => console.log(json));
```



### HTTP Request
`DELETE api/device/{device}`


<!-- END_bece7ab77641bfb467ed3cabdb0c5b03 -->

#Network provider management


<!-- START_99b4a4b080501065b151e585b7f0270d -->
## Display a listing of the resource.

> Example request:

```bash
curl -X GET -G "http://localhost/api/networkprovider" 
```

```javascript
const url = new URL("http://localhost/api/networkprovider");

let headers = {
    "Accept": "application/json",
    "Content-Type": "application/json",
}

fetch(url, {
    method: "GET",
    headers: headers,
})
    .then(response => response.json())
    .then(json => console.log(json));
```


> Example response (200):

```json
[
    {
        "id": 7,
        "name": "Hills, Schroeder and Wilderman",
        "created_at": "2019-11-05 03:15:35",
        "updated_at": "2019-11-05 03:15:35"
    },
    {
        "id": 8,
        "name": "Smitham, Muller and Bednar",
        "created_at": "2019-11-05 03:15:35",
        "updated_at": "2019-11-05 03:15:35"
    },
    {
        "id": 4,
        "name": "Lowe-Reichel",
        "created_at": "2019-11-05 03:15:34",
        "updated_at": "2019-11-05 03:15:34"
    },
    {
        "id": 6,
        "name": "Kris and Sons",
        "created_at": "2019-11-05 03:15:34",
        "updated_at": "2019-11-05 03:15:34"
    },
    {
        "id": 5,
        "name": "Reichel, O'Conner and Raynor",
        "created_at": "2019-11-05 03:15:34",
        "updated_at": "2019-11-05 03:15:34"
    },
    {
        "id": 3,
        "name": "Wilderman-Dickinson",
        "created_at": "2019-11-05 03:15:34",
        "updated_at": "2019-11-05 03:15:34"
    },
    {
        "id": 2,
        "name": "Oberbrunner, Strosin and Crooks",
        "created_at": "2019-11-05 03:14:23",
        "updated_at": "2019-11-05 03:14:23"
    },
    {
        "id": 1,
        "name": "Abshire Group",
        "created_at": "2019-11-05 03:14:22",
        "updated_at": "2019-11-05 03:14:22"
    }
]
```

### HTTP Request
`GET api/networkprovider`


<!-- END_99b4a4b080501065b151e585b7f0270d -->

<!-- START_8d34538c5670e9870f437634d51f7ade -->
## Store a newly created resource in storage.

> Example request:

```bash
curl -X POST "http://localhost/api/networkprovider" 
```

```javascript
const url = new URL("http://localhost/api/networkprovider");

let headers = {
    "Accept": "application/json",
    "Content-Type": "application/json",
}

fetch(url, {
    method: "POST",
    headers: headers,
})
    .then(response => response.json())
    .then(json => console.log(json));
```



### HTTP Request
`POST api/networkprovider`


<!-- END_8d34538c5670e9870f437634d51f7ade -->

<!-- START_a3faca085dec1dcf32335084a1e7d51a -->
## Display the specified resou$networkProviderrce.

> Example request:

```bash
curl -X GET -G "http://localhost/api/networkprovider/1" 
```

```javascript
const url = new URL("http://localhost/api/networkprovider/1");

let headers = {
    "Accept": "application/json",
    "Content-Type": "application/json",
}

fetch(url, {
    method: "GET",
    headers: headers,
})
    .then(response => response.json())
    .then(json => console.log(json));
```


> Example response (200):

```json
{
    "id": 1,
    "name": "Abshire Group",
    "created_at": "2019-11-05 03:14:22",
    "updated_at": "2019-11-05 03:14:22"
}
```

### HTTP Request
`GET api/networkprovider/{networkprovider}`


<!-- END_a3faca085dec1dcf32335084a1e7d51a -->

<!-- START_c0bd0311bcd4d71e43783ebcda68435f -->
## Update the specified resource in storage.

> Example request:

```bash
curl -X PUT "http://localhost/api/networkprovider/1" 
```

```javascript
const url = new URL("http://localhost/api/networkprovider/1");

let headers = {
    "Accept": "application/json",
    "Content-Type": "application/json",
}

fetch(url, {
    method: "PUT",
    headers: headers,
})
    .then(response => response.json())
    .then(json => console.log(json));
```



### HTTP Request
`PUT api/networkprovider/{networkprovider}`

`PATCH api/networkprovider/{networkprovider}`


<!-- END_c0bd0311bcd4d71e43783ebcda68435f -->

<!-- START_49bdbdb3d21172703b3cc25e7cd885a8 -->
## Remove the specified resource from storage.

> Example request:

```bash
curl -X DELETE "http://localhost/api/networkprovider/1" 
```

```javascript
const url = new URL("http://localhost/api/networkprovider/1");

let headers = {
    "Accept": "application/json",
    "Content-Type": "application/json",
}

fetch(url, {
    method: "DELETE",
    headers: headers,
})
    .then(response => response.json())
    .then(json => console.log(json));
```



### HTTP Request
`DELETE api/networkprovider/{networkprovider}`


<!-- END_49bdbdb3d21172703b3cc25e7cd885a8 -->

#Phone number management


<!-- START_1bfe514e477502d82a70449f77ba248e -->
## Display a listing of the resource.

> Example request:

```bash
curl -X GET -G "http://localhost/api/phonenumber" 
```

```javascript
const url = new URL("http://localhost/api/phonenumber");

let headers = {
    "Accept": "application/json",
    "Content-Type": "application/json",
}

fetch(url, {
    method: "GET",
    headers: headers,
})
    .then(response => response.json())
    .then(json => console.log(json));
```


> Example response (200):

```json
[
    {
        "id": 79,
        "phone_number": "07695632377",
        "network_provider_id": 2,
        "created_at": "2019-11-05 03:15:35",
        "updated_at": "2019-11-05 03:15:35",
        "networkprovider": {
            "id": 2,
            "name": "Oberbrunner, Strosin and Crooks",
            "created_at": "2019-11-05 03:14:23",
            "updated_at": "2019-11-05 03:14:23"
        }
    },
    {
        "id": 78,
        "phone_number": "07463127795",
        "network_provider_id": 2,
        "created_at": "2019-11-05 03:15:35",
        "updated_at": "2019-11-05 03:15:35",
        "networkprovider": {
            "id": 2,
            "name": "Oberbrunner, Strosin and Crooks",
            "created_at": "2019-11-05 03:14:23",
            "updated_at": "2019-11-05 03:14:23"
        }
    },
    {
        "id": 77,
        "phone_number": "07119066167",
        "network_provider_id": 2,
        "created_at": "2019-11-05 03:15:35",
        "updated_at": "2019-11-05 03:15:35",
        "networkprovider": {
            "id": 2,
            "name": "Oberbrunner, Strosin and Crooks",
            "created_at": "2019-11-05 03:14:23",
            "updated_at": "2019-11-05 03:14:23"
        }
    },
    {
        "id": 76,
        "phone_number": "07876766023",
        "network_provider_id": 2,
        "created_at": "2019-11-05 03:15:35",
        "updated_at": "2019-11-05 03:15:35",
        "networkprovider": {
            "id": 2,
            "name": "Oberbrunner, Strosin and Crooks",
            "created_at": "2019-11-05 03:14:23",
            "updated_at": "2019-11-05 03:14:23"
        }
    },
    {
        "id": 75,
        "phone_number": "07398712720",
        "network_provider_id": 2,
        "created_at": "2019-11-05 03:15:35",
        "updated_at": "2019-11-05 03:15:35",
        "networkprovider": {
            "id": 2,
            "name": "Oberbrunner, Strosin and Crooks",
            "created_at": "2019-11-05 03:14:23",
            "updated_at": "2019-11-05 03:14:23"
        }
    },
    {
        "id": 74,
        "phone_number": "07393965055",
        "network_provider_id": 2,
        "created_at": "2019-11-05 03:15:35",
        "updated_at": "2019-11-05 03:15:35",
        "networkprovider": {
            "id": 2,
            "name": "Oberbrunner, Strosin and Crooks",
            "created_at": "2019-11-05 03:14:23",
            "updated_at": "2019-11-05 03:14:23"
        }
    },
    {
        "id": 73,
        "phone_number": "07775469068",
        "network_provider_id": 2,
        "created_at": "2019-11-05 03:15:35",
        "updated_at": "2019-11-05 03:15:35",
        "networkprovider": {
            "id": 2,
            "name": "Oberbrunner, Strosin and Crooks",
            "created_at": "2019-11-05 03:14:23",
            "updated_at": "2019-11-05 03:14:23"
        }
    },
    {
        "id": 72,
        "phone_number": "07710798207",
        "network_provider_id": 2,
        "created_at": "2019-11-05 03:15:35",
        "updated_at": "2019-11-05 03:15:35",
        "networkprovider": {
            "id": 2,
            "name": "Oberbrunner, Strosin and Crooks",
            "created_at": "2019-11-05 03:14:23",
            "updated_at": "2019-11-05 03:14:23"
        }
    },
    {
        "id": 71,
        "phone_number": "07936020677",
        "network_provider_id": 2,
        "created_at": "2019-11-05 03:15:35",
        "updated_at": "2019-11-05 03:15:35",
        "networkprovider": {
            "id": 2,
            "name": "Oberbrunner, Strosin and Crooks",
            "created_at": "2019-11-05 03:14:23",
            "updated_at": "2019-11-05 03:14:23"
        }
    },
    {
        "id": 70,
        "phone_number": "07894775846",
        "network_provider_id": 1,
        "created_at": "2019-11-05 03:15:35",
        "updated_at": "2019-11-05 03:15:35",
        "networkprovider": {
            "id": 1,
            "name": "Abshire Group",
            "created_at": "2019-11-05 03:14:22",
            "updated_at": "2019-11-05 03:14:22"
        }
    },
    {
        "id": 61,
        "phone_number": "07290702761",
        "network_provider_id": 1,
        "created_at": "2019-11-05 03:15:35",
        "updated_at": "2019-11-05 03:15:35",
        "networkprovider": {
            "id": 1,
            "name": "Abshire Group",
            "created_at": "2019-11-05 03:14:22",
            "updated_at": "2019-11-05 03:14:22"
        }
    },
    {
        "id": 69,
        "phone_number": "07832719529",
        "network_provider_id": 1,
        "created_at": "2019-11-05 03:15:35",
        "updated_at": "2019-11-05 03:15:35",
        "networkprovider": {
            "id": 1,
            "name": "Abshire Group",
            "created_at": "2019-11-05 03:14:22",
            "updated_at": "2019-11-05 03:14:22"
        }
    },
    {
        "id": 68,
        "phone_number": "07894874699",
        "network_provider_id": 1,
        "created_at": "2019-11-05 03:15:35",
        "updated_at": "2019-11-05 03:15:35",
        "networkprovider": {
            "id": 1,
            "name": "Abshire Group",
            "created_at": "2019-11-05 03:14:22",
            "updated_at": "2019-11-05 03:14:22"
        }
    },
    {
        "id": 67,
        "phone_number": "07418248339",
        "network_provider_id": 1,
        "created_at": "2019-11-05 03:15:35",
        "updated_at": "2019-11-05 03:15:35",
        "networkprovider": {
            "id": 1,
            "name": "Abshire Group",
            "created_at": "2019-11-05 03:14:22",
            "updated_at": "2019-11-05 03:14:22"
        }
    },
    {
        "id": 66,
        "phone_number": "07176860869",
        "network_provider_id": 1,
        "created_at": "2019-11-05 03:15:35",
        "updated_at": "2019-11-05 03:15:35",
        "networkprovider": {
            "id": 1,
            "name": "Abshire Group",
            "created_at": "2019-11-05 03:14:22",
            "updated_at": "2019-11-05 03:14:22"
        }
    },
    {
        "id": 65,
        "phone_number": "07969159337",
        "network_provider_id": 1,
        "created_at": "2019-11-05 03:15:35",
        "updated_at": "2019-11-05 03:15:35",
        "networkprovider": {
            "id": 1,
            "name": "Abshire Group",
            "created_at": "2019-11-05 03:14:22",
            "updated_at": "2019-11-05 03:14:22"
        }
    },
    {
        "id": 64,
        "phone_number": "07225026880",
        "network_provider_id": 1,
        "created_at": "2019-11-05 03:15:35",
        "updated_at": "2019-11-05 03:15:35",
        "networkprovider": {
            "id": 1,
            "name": "Abshire Group",
            "created_at": "2019-11-05 03:14:22",
            "updated_at": "2019-11-05 03:14:22"
        }
    },
    {
        "id": 63,
        "phone_number": "07541644282",
        "network_provider_id": 1,
        "created_at": "2019-11-05 03:15:35",
        "updated_at": "2019-11-05 03:15:35",
        "networkprovider": {
            "id": 1,
            "name": "Abshire Group",
            "created_at": "2019-11-05 03:14:22",
            "updated_at": "2019-11-05 03:14:22"
        }
    },
    {
        "id": 62,
        "phone_number": "07551080844",
        "network_provider_id": 1,
        "created_at": "2019-11-05 03:15:35",
        "updated_at": "2019-11-05 03:15:35",
        "networkprovider": {
            "id": 1,
            "name": "Abshire Group",
            "created_at": "2019-11-05 03:14:22",
            "updated_at": "2019-11-05 03:14:22"
        }
    },
    {
        "id": 80,
        "phone_number": "07757234541",
        "network_provider_id": 2,
        "created_at": "2019-11-05 03:15:35",
        "updated_at": "2019-11-05 03:15:35",
        "networkprovider": {
            "id": 2,
            "name": "Oberbrunner, Strosin and Crooks",
            "created_at": "2019-11-05 03:14:23",
            "updated_at": "2019-11-05 03:14:23"
        }
    },
    {
        "id": 40,
        "phone_number": "07421287495",
        "network_provider_id": 2,
        "created_at": "2019-11-05 03:15:34",
        "updated_at": "2019-11-05 03:15:34",
        "networkprovider": {
            "id": 2,
            "name": "Oberbrunner, Strosin and Crooks",
            "created_at": "2019-11-05 03:14:23",
            "updated_at": "2019-11-05 03:14:23"
        }
    },
    {
        "id": 41,
        "phone_number": "07451661499",
        "network_provider_id": 1,
        "created_at": "2019-11-05 03:15:34",
        "updated_at": "2019-11-05 03:15:34",
        "networkprovider": {
            "id": 1,
            "name": "Abshire Group",
            "created_at": "2019-11-05 03:14:22",
            "updated_at": "2019-11-05 03:14:22"
        }
    },
    {
        "id": 42,
        "phone_number": "07191519941",
        "network_provider_id": 1,
        "created_at": "2019-11-05 03:15:34",
        "updated_at": "2019-11-05 03:15:34",
        "networkprovider": {
            "id": 1,
            "name": "Abshire Group",
            "created_at": "2019-11-05 03:14:22",
            "updated_at": "2019-11-05 03:14:22"
        }
    },
    {
        "id": 43,
        "phone_number": "07424479381",
        "network_provider_id": 1,
        "created_at": "2019-11-05 03:15:34",
        "updated_at": "2019-11-05 03:15:34",
        "networkprovider": {
            "id": 1,
            "name": "Abshire Group",
            "created_at": "2019-11-05 03:14:22",
            "updated_at": "2019-11-05 03:14:22"
        }
    },
    {
        "id": 44,
        "phone_number": "07670528028",
        "network_provider_id": 1,
        "created_at": "2019-11-05 03:15:34",
        "updated_at": "2019-11-05 03:15:34",
        "networkprovider": {
            "id": 1,
            "name": "Abshire Group",
            "created_at": "2019-11-05 03:14:22",
            "updated_at": "2019-11-05 03:14:22"
        }
    },
    {
        "id": 45,
        "phone_number": "07885637887",
        "network_provider_id": 1,
        "created_at": "2019-11-05 03:15:34",
        "updated_at": "2019-11-05 03:15:34",
        "networkprovider": {
            "id": 1,
            "name": "Abshire Group",
            "created_at": "2019-11-05 03:14:22",
            "updated_at": "2019-11-05 03:14:22"
        }
    },
    {
        "id": 46,
        "phone_number": "07246988182",
        "network_provider_id": 1,
        "created_at": "2019-11-05 03:15:34",
        "updated_at": "2019-11-05 03:15:34",
        "networkprovider": {
            "id": 1,
            "name": "Abshire Group",
            "created_at": "2019-11-05 03:14:22",
            "updated_at": "2019-11-05 03:14:22"
        }
    },
    {
        "id": 47,
        "phone_number": "07118748891",
        "network_provider_id": 1,
        "created_at": "2019-11-05 03:15:34",
        "updated_at": "2019-11-05 03:15:34",
        "networkprovider": {
            "id": 1,
            "name": "Abshire Group",
            "created_at": "2019-11-05 03:14:22",
            "updated_at": "2019-11-05 03:14:22"
        }
    },
    {
        "id": 48,
        "phone_number": "07293524589",
        "network_provider_id": 1,
        "created_at": "2019-11-05 03:15:34",
        "updated_at": "2019-11-05 03:15:34",
        "networkprovider": {
            "id": 1,
            "name": "Abshire Group",
            "created_at": "2019-11-05 03:14:22",
            "updated_at": "2019-11-05 03:14:22"
        }
    },
    {
        "id": 49,
        "phone_number": "07452229520",
        "network_provider_id": 1,
        "created_at": "2019-11-05 03:15:34",
        "updated_at": "2019-11-05 03:15:34",
        "networkprovider": {
            "id": 1,
            "name": "Abshire Group",
            "created_at": "2019-11-05 03:14:22",
            "updated_at": "2019-11-05 03:14:22"
        }
    },
    {
        "id": 50,
        "phone_number": "07535510066",
        "network_provider_id": 1,
        "created_at": "2019-11-05 03:15:34",
        "updated_at": "2019-11-05 03:15:34",
        "networkprovider": {
            "id": 1,
            "name": "Abshire Group",
            "created_at": "2019-11-05 03:14:22",
            "updated_at": "2019-11-05 03:14:22"
        }
    },
    {
        "id": 52,
        "phone_number": "07472212523",
        "network_provider_id": 2,
        "created_at": "2019-11-05 03:15:34",
        "updated_at": "2019-11-05 03:15:34",
        "networkprovider": {
            "id": 2,
            "name": "Oberbrunner, Strosin and Crooks",
            "created_at": "2019-11-05 03:14:23",
            "updated_at": "2019-11-05 03:14:23"
        }
    },
    {
        "id": 53,
        "phone_number": "07178032502",
        "network_provider_id": 2,
        "created_at": "2019-11-05 03:15:34",
        "updated_at": "2019-11-05 03:15:34",
        "networkprovider": {
            "id": 2,
            "name": "Oberbrunner, Strosin and Crooks",
            "created_at": "2019-11-05 03:14:23",
            "updated_at": "2019-11-05 03:14:23"
        }
    },
    {
        "id": 54,
        "phone_number": "07448390790",
        "network_provider_id": 2,
        "created_at": "2019-11-05 03:15:34",
        "updated_at": "2019-11-05 03:15:34",
        "networkprovider": {
            "id": 2,
            "name": "Oberbrunner, Strosin and Crooks",
            "created_at": "2019-11-05 03:14:23",
            "updated_at": "2019-11-05 03:14:23"
        }
    },
    {
        "id": 55,
        "phone_number": "07371884981",
        "network_provider_id": 2,
        "created_at": "2019-11-05 03:15:34",
        "updated_at": "2019-11-05 03:15:34",
        "networkprovider": {
            "id": 2,
            "name": "Oberbrunner, Strosin and Crooks",
            "created_at": "2019-11-05 03:14:23",
            "updated_at": "2019-11-05 03:14:23"
        }
    },
    {
        "id": 56,
        "phone_number": "07149131196",
        "network_provider_id": 2,
        "created_at": "2019-11-05 03:15:34",
        "updated_at": "2019-11-05 03:15:34",
        "networkprovider": {
            "id": 2,
            "name": "Oberbrunner, Strosin and Crooks",
            "created_at": "2019-11-05 03:14:23",
            "updated_at": "2019-11-05 03:14:23"
        }
    },
    {
        "id": 57,
        "phone_number": "07421839313",
        "network_provider_id": 2,
        "created_at": "2019-11-05 03:15:34",
        "updated_at": "2019-11-05 03:15:34",
        "networkprovider": {
            "id": 2,
            "name": "Oberbrunner, Strosin and Crooks",
            "created_at": "2019-11-05 03:14:23",
            "updated_at": "2019-11-05 03:14:23"
        }
    },
    {
        "id": 58,
        "phone_number": "07740885604",
        "network_provider_id": 2,
        "created_at": "2019-11-05 03:15:34",
        "updated_at": "2019-11-05 03:15:34",
        "networkprovider": {
            "id": 2,
            "name": "Oberbrunner, Strosin and Crooks",
            "created_at": "2019-11-05 03:14:23",
            "updated_at": "2019-11-05 03:14:23"
        }
    },
    {
        "id": 59,
        "phone_number": "07966791928",
        "network_provider_id": 2,
        "created_at": "2019-11-05 03:15:34",
        "updated_at": "2019-11-05 03:15:34",
        "networkprovider": {
            "id": 2,
            "name": "Oberbrunner, Strosin and Crooks",
            "created_at": "2019-11-05 03:14:23",
            "updated_at": "2019-11-05 03:14:23"
        }
    },
    {
        "id": 60,
        "phone_number": "07316404736",
        "network_provider_id": 2,
        "created_at": "2019-11-05 03:15:34",
        "updated_at": "2019-11-05 03:15:34",
        "networkprovider": {
            "id": 2,
            "name": "Oberbrunner, Strosin and Crooks",
            "created_at": "2019-11-05 03:14:23",
            "updated_at": "2019-11-05 03:14:23"
        }
    },
    {
        "id": 51,
        "phone_number": "07591394006",
        "network_provider_id": 2,
        "created_at": "2019-11-05 03:15:34",
        "updated_at": "2019-11-05 03:15:34",
        "networkprovider": {
            "id": 2,
            "name": "Oberbrunner, Strosin and Crooks",
            "created_at": "2019-11-05 03:14:23",
            "updated_at": "2019-11-05 03:14:23"
        }
    },
    {
        "id": 21,
        "phone_number": "07670647367",
        "network_provider_id": 1,
        "created_at": "2019-11-05 03:15:34",
        "updated_at": "2019-11-05 03:15:34",
        "networkprovider": {
            "id": 1,
            "name": "Abshire Group",
            "created_at": "2019-11-05 03:14:22",
            "updated_at": "2019-11-05 03:14:22"
        }
    },
    {
        "id": 22,
        "phone_number": "07880611106",
        "network_provider_id": 1,
        "created_at": "2019-11-05 03:15:34",
        "updated_at": "2019-11-05 03:15:34",
        "networkprovider": {
            "id": 1,
            "name": "Abshire Group",
            "created_at": "2019-11-05 03:14:22",
            "updated_at": "2019-11-05 03:14:22"
        }
    },
    {
        "id": 23,
        "phone_number": "07922609529",
        "network_provider_id": 1,
        "created_at": "2019-11-05 03:15:34",
        "updated_at": "2019-11-05 03:15:34",
        "networkprovider": {
            "id": 1,
            "name": "Abshire Group",
            "created_at": "2019-11-05 03:14:22",
            "updated_at": "2019-11-05 03:14:22"
        }
    },
    {
        "id": 24,
        "phone_number": "07546108856",
        "network_provider_id": 1,
        "created_at": "2019-11-05 03:15:34",
        "updated_at": "2019-11-05 03:15:34",
        "networkprovider": {
            "id": 1,
            "name": "Abshire Group",
            "created_at": "2019-11-05 03:14:22",
            "updated_at": "2019-11-05 03:14:22"
        }
    },
    {
        "id": 25,
        "phone_number": "07122270384",
        "network_provider_id": 1,
        "created_at": "2019-11-05 03:15:34",
        "updated_at": "2019-11-05 03:15:34",
        "networkprovider": {
            "id": 1,
            "name": "Abshire Group",
            "created_at": "2019-11-05 03:14:22",
            "updated_at": "2019-11-05 03:14:22"
        }
    },
    {
        "id": 26,
        "phone_number": "07374568550",
        "network_provider_id": 1,
        "created_at": "2019-11-05 03:15:34",
        "updated_at": "2019-11-05 03:15:34",
        "networkprovider": {
            "id": 1,
            "name": "Abshire Group",
            "created_at": "2019-11-05 03:14:22",
            "updated_at": "2019-11-05 03:14:22"
        }
    },
    {
        "id": 27,
        "phone_number": "07557863007",
        "network_provider_id": 1,
        "created_at": "2019-11-05 03:15:34",
        "updated_at": "2019-11-05 03:15:34",
        "networkprovider": {
            "id": 1,
            "name": "Abshire Group",
            "created_at": "2019-11-05 03:14:22",
            "updated_at": "2019-11-05 03:14:22"
        }
    },
    {
        "id": 28,
        "phone_number": "07828418078",
        "network_provider_id": 1,
        "created_at": "2019-11-05 03:15:34",
        "updated_at": "2019-11-05 03:15:34",
        "networkprovider": {
            "id": 1,
            "name": "Abshire Group",
            "created_at": "2019-11-05 03:14:22",
            "updated_at": "2019-11-05 03:14:22"
        }
    },
    {
        "id": 29,
        "phone_number": "07706434580",
        "network_provider_id": 1,
        "created_at": "2019-11-05 03:15:34",
        "updated_at": "2019-11-05 03:15:34",
        "networkprovider": {
            "id": 1,
            "name": "Abshire Group",
            "created_at": "2019-11-05 03:14:22",
            "updated_at": "2019-11-05 03:14:22"
        }
    },
    {
        "id": 30,
        "phone_number": "07486754101",
        "network_provider_id": 1,
        "created_at": "2019-11-05 03:15:34",
        "updated_at": "2019-11-05 03:15:34",
        "networkprovider": {
            "id": 1,
            "name": "Abshire Group",
            "created_at": "2019-11-05 03:14:22",
            "updated_at": "2019-11-05 03:14:22"
        }
    },
    {
        "id": 31,
        "phone_number": "07205988483",
        "network_provider_id": 2,
        "created_at": "2019-11-05 03:15:34",
        "updated_at": "2019-11-05 03:15:34",
        "networkprovider": {
            "id": 2,
            "name": "Oberbrunner, Strosin and Crooks",
            "created_at": "2019-11-05 03:14:23",
            "updated_at": "2019-11-05 03:14:23"
        }
    },
    {
        "id": 32,
        "phone_number": "07423949935",
        "network_provider_id": 2,
        "created_at": "2019-11-05 03:15:34",
        "updated_at": "2019-11-05 03:15:34",
        "networkprovider": {
            "id": 2,
            "name": "Oberbrunner, Strosin and Crooks",
            "created_at": "2019-11-05 03:14:23",
            "updated_at": "2019-11-05 03:14:23"
        }
    },
    {
        "id": 33,
        "phone_number": "07588893151",
        "network_provider_id": 2,
        "created_at": "2019-11-05 03:15:34",
        "updated_at": "2019-11-05 03:15:34",
        "networkprovider": {
            "id": 2,
            "name": "Oberbrunner, Strosin and Crooks",
            "created_at": "2019-11-05 03:14:23",
            "updated_at": "2019-11-05 03:14:23"
        }
    },
    {
        "id": 34,
        "phone_number": "07511895703",
        "network_provider_id": 2,
        "created_at": "2019-11-05 03:15:34",
        "updated_at": "2019-11-05 03:15:34",
        "networkprovider": {
            "id": 2,
            "name": "Oberbrunner, Strosin and Crooks",
            "created_at": "2019-11-05 03:14:23",
            "updated_at": "2019-11-05 03:14:23"
        }
    },
    {
        "id": 35,
        "phone_number": "07761555616",
        "network_provider_id": 2,
        "created_at": "2019-11-05 03:15:34",
        "updated_at": "2019-11-05 03:15:34",
        "networkprovider": {
            "id": 2,
            "name": "Oberbrunner, Strosin and Crooks",
            "created_at": "2019-11-05 03:14:23",
            "updated_at": "2019-11-05 03:14:23"
        }
    },
    {
        "id": 36,
        "phone_number": "07766253296",
        "network_provider_id": 2,
        "created_at": "2019-11-05 03:15:34",
        "updated_at": "2019-11-05 03:15:34",
        "networkprovider": {
            "id": 2,
            "name": "Oberbrunner, Strosin and Crooks",
            "created_at": "2019-11-05 03:14:23",
            "updated_at": "2019-11-05 03:14:23"
        }
    },
    {
        "id": 37,
        "phone_number": "07800691850",
        "network_provider_id": 2,
        "created_at": "2019-11-05 03:15:34",
        "updated_at": "2019-11-05 03:15:34",
        "networkprovider": {
            "id": 2,
            "name": "Oberbrunner, Strosin and Crooks",
            "created_at": "2019-11-05 03:14:23",
            "updated_at": "2019-11-05 03:14:23"
        }
    },
    {
        "id": 38,
        "phone_number": "07426909965",
        "network_provider_id": 2,
        "created_at": "2019-11-05 03:15:34",
        "updated_at": "2019-11-05 03:15:34",
        "networkprovider": {
            "id": 2,
            "name": "Oberbrunner, Strosin and Crooks",
            "created_at": "2019-11-05 03:14:23",
            "updated_at": "2019-11-05 03:14:23"
        }
    },
    {
        "id": 39,
        "phone_number": "07946915280",
        "network_provider_id": 2,
        "created_at": "2019-11-05 03:15:34",
        "updated_at": "2019-11-05 03:15:34",
        "networkprovider": {
            "id": 2,
            "name": "Oberbrunner, Strosin and Crooks",
            "created_at": "2019-11-05 03:14:23",
            "updated_at": "2019-11-05 03:14:23"
        }
    },
    {
        "id": 1,
        "phone_number": "07763766356",
        "network_provider_id": 1,
        "created_at": "2019-11-05 03:14:23",
        "updated_at": "2019-11-05 03:14:23",
        "networkprovider": {
            "id": 1,
            "name": "Abshire Group",
            "created_at": "2019-11-05 03:14:22",
            "updated_at": "2019-11-05 03:14:22"
        }
    },
    {
        "id": 20,
        "phone_number": "07147919203",
        "network_provider_id": 2,
        "created_at": "2019-11-05 03:14:23",
        "updated_at": "2019-11-05 03:14:23",
        "networkprovider": {
            "id": 2,
            "name": "Oberbrunner, Strosin and Crooks",
            "created_at": "2019-11-05 03:14:23",
            "updated_at": "2019-11-05 03:14:23"
        }
    },
    {
        "id": 19,
        "phone_number": "07713462604",
        "network_provider_id": 2,
        "created_at": "2019-11-05 03:14:23",
        "updated_at": "2019-11-05 03:14:23",
        "networkprovider": {
            "id": 2,
            "name": "Oberbrunner, Strosin and Crooks",
            "created_at": "2019-11-05 03:14:23",
            "updated_at": "2019-11-05 03:14:23"
        }
    },
    {
        "id": 18,
        "phone_number": "07623890894",
        "network_provider_id": 2,
        "created_at": "2019-11-05 03:14:23",
        "updated_at": "2019-11-05 03:14:23",
        "networkprovider": {
            "id": 2,
            "name": "Oberbrunner, Strosin and Crooks",
            "created_at": "2019-11-05 03:14:23",
            "updated_at": "2019-11-05 03:14:23"
        }
    },
    {
        "id": 17,
        "phone_number": "07410457225",
        "network_provider_id": 2,
        "created_at": "2019-11-05 03:14:23",
        "updated_at": "2019-11-05 03:14:23",
        "networkprovider": {
            "id": 2,
            "name": "Oberbrunner, Strosin and Crooks",
            "created_at": "2019-11-05 03:14:23",
            "updated_at": "2019-11-05 03:14:23"
        }
    },
    {
        "id": 16,
        "phone_number": "07177636812",
        "network_provider_id": 2,
        "created_at": "2019-11-05 03:14:23",
        "updated_at": "2019-11-05 03:14:23",
        "networkprovider": {
            "id": 2,
            "name": "Oberbrunner, Strosin and Crooks",
            "created_at": "2019-11-05 03:14:23",
            "updated_at": "2019-11-05 03:14:23"
        }
    },
    {
        "id": 15,
        "phone_number": "07243462616",
        "network_provider_id": 2,
        "created_at": "2019-11-05 03:14:23",
        "updated_at": "2019-11-05 03:14:23",
        "networkprovider": {
            "id": 2,
            "name": "Oberbrunner, Strosin and Crooks",
            "created_at": "2019-11-05 03:14:23",
            "updated_at": "2019-11-05 03:14:23"
        }
    },
    {
        "id": 14,
        "phone_number": "07621331570",
        "network_provider_id": 2,
        "created_at": "2019-11-05 03:14:23",
        "updated_at": "2019-11-05 03:14:23",
        "networkprovider": {
            "id": 2,
            "name": "Oberbrunner, Strosin and Crooks",
            "created_at": "2019-11-05 03:14:23",
            "updated_at": "2019-11-05 03:14:23"
        }
    },
    {
        "id": 13,
        "phone_number": "07319333966",
        "network_provider_id": 2,
        "created_at": "2019-11-05 03:14:23",
        "updated_at": "2019-11-05 03:14:23",
        "networkprovider": {
            "id": 2,
            "name": "Oberbrunner, Strosin and Crooks",
            "created_at": "2019-11-05 03:14:23",
            "updated_at": "2019-11-05 03:14:23"
        }
    },
    {
        "id": 12,
        "phone_number": "07104891585",
        "network_provider_id": 2,
        "created_at": "2019-11-05 03:14:23",
        "updated_at": "2019-11-05 03:14:23",
        "networkprovider": {
            "id": 2,
            "name": "Oberbrunner, Strosin and Crooks",
            "created_at": "2019-11-05 03:14:23",
            "updated_at": "2019-11-05 03:14:23"
        }
    },
    {
        "id": 11,
        "phone_number": "07497028043",
        "network_provider_id": 2,
        "created_at": "2019-11-05 03:14:23",
        "updated_at": "2019-11-05 03:14:23",
        "networkprovider": {
            "id": 2,
            "name": "Oberbrunner, Strosin and Crooks",
            "created_at": "2019-11-05 03:14:23",
            "updated_at": "2019-11-05 03:14:23"
        }
    },
    {
        "id": 10,
        "phone_number": "07660043129",
        "network_provider_id": 1,
        "created_at": "2019-11-05 03:14:23",
        "updated_at": "2019-11-05 03:14:23",
        "networkprovider": {
            "id": 1,
            "name": "Abshire Group",
            "created_at": "2019-11-05 03:14:22",
            "updated_at": "2019-11-05 03:14:22"
        }
    },
    {
        "id": 9,
        "phone_number": "07684486985",
        "network_provider_id": 1,
        "created_at": "2019-11-05 03:14:23",
        "updated_at": "2019-11-05 03:14:23",
        "networkprovider": {
            "id": 1,
            "name": "Abshire Group",
            "created_at": "2019-11-05 03:14:22",
            "updated_at": "2019-11-05 03:14:22"
        }
    },
    {
        "id": 8,
        "phone_number": "07234551215",
        "network_provider_id": 1,
        "created_at": "2019-11-05 03:14:23",
        "updated_at": "2019-11-05 03:14:23",
        "networkprovider": {
            "id": 1,
            "name": "Abshire Group",
            "created_at": "2019-11-05 03:14:22",
            "updated_at": "2019-11-05 03:14:22"
        }
    },
    {
        "id": 7,
        "phone_number": "07478835917",
        "network_provider_id": 1,
        "created_at": "2019-11-05 03:14:23",
        "updated_at": "2019-11-05 03:14:23",
        "networkprovider": {
            "id": 1,
            "name": "Abshire Group",
            "created_at": "2019-11-05 03:14:22",
            "updated_at": "2019-11-05 03:14:22"
        }
    },
    {
        "id": 6,
        "phone_number": "07808926206",
        "network_provider_id": 1,
        "created_at": "2019-11-05 03:14:23",
        "updated_at": "2019-11-05 03:14:23",
        "networkprovider": {
            "id": 1,
            "name": "Abshire Group",
            "created_at": "2019-11-05 03:14:22",
            "updated_at": "2019-11-05 03:14:22"
        }
    },
    {
        "id": 5,
        "phone_number": "07714290589",
        "network_provider_id": 1,
        "created_at": "2019-11-05 03:14:23",
        "updated_at": "2019-11-05 03:14:23",
        "networkprovider": {
            "id": 1,
            "name": "Abshire Group",
            "created_at": "2019-11-05 03:14:22",
            "updated_at": "2019-11-05 03:14:22"
        }
    },
    {
        "id": 4,
        "phone_number": "07538269374",
        "network_provider_id": 1,
        "created_at": "2019-11-05 03:14:23",
        "updated_at": "2019-11-05 03:14:23",
        "networkprovider": {
            "id": 1,
            "name": "Abshire Group",
            "created_at": "2019-11-05 03:14:22",
            "updated_at": "2019-11-05 03:14:22"
        }
    },
    {
        "id": 3,
        "phone_number": "07924281027",
        "network_provider_id": 1,
        "created_at": "2019-11-05 03:14:23",
        "updated_at": "2019-11-05 03:14:23",
        "networkprovider": {
            "id": 1,
            "name": "Abshire Group",
            "created_at": "2019-11-05 03:14:22",
            "updated_at": "2019-11-05 03:14:22"
        }
    },
    {
        "id": 2,
        "phone_number": "07500565388",
        "network_provider_id": 1,
        "created_at": "2019-11-05 03:14:23",
        "updated_at": "2019-11-05 03:14:23",
        "networkprovider": {
            "id": 1,
            "name": "Abshire Group",
            "created_at": "2019-11-05 03:14:22",
            "updated_at": "2019-11-05 03:14:22"
        }
    }
]
```

### HTTP Request
`GET api/phonenumber`


<!-- END_1bfe514e477502d82a70449f77ba248e -->

<!-- START_a73f0104aed27a5636a865ece4c11472 -->
## Store a newly created resource in storage.

> Example request:

```bash
curl -X POST "http://localhost/api/phonenumber" 
```

```javascript
const url = new URL("http://localhost/api/phonenumber");

let headers = {
    "Accept": "application/json",
    "Content-Type": "application/json",
}

fetch(url, {
    method: "POST",
    headers: headers,
})
    .then(response => response.json())
    .then(json => console.log(json));
```



### HTTP Request
`POST api/phonenumber`


<!-- END_a73f0104aed27a5636a865ece4c11472 -->

<!-- START_5055ef49f094b423cfc4a3a4c2aa1da2 -->
## Display the specified resource.

> Example request:

```bash
curl -X GET -G "http://localhost/api/phonenumber/1" 
```

```javascript
const url = new URL("http://localhost/api/phonenumber/1");

let headers = {
    "Accept": "application/json",
    "Content-Type": "application/json",
}

fetch(url, {
    method: "GET",
    headers: headers,
})
    .then(response => response.json())
    .then(json => console.log(json));
```


> Example response (200):

```json
{
    "id": 1,
    "phone_number": "07763766356",
    "network_provider_id": 1,
    "created_at": "2019-11-05 03:14:23",
    "updated_at": "2019-11-05 03:14:23",
    "networkprovider": {
        "id": 1,
        "name": "Abshire Group",
        "created_at": "2019-11-05 03:14:22",
        "updated_at": "2019-11-05 03:14:22"
    }
}
```

### HTTP Request
`GET api/phonenumber/{phonenumber}`


<!-- END_5055ef49f094b423cfc4a3a4c2aa1da2 -->

<!-- START_c86f8531aa1820052dce7d0937cc4f40 -->
## Update the specified resource in storage.

> Example request:

```bash
curl -X PUT "http://localhost/api/phonenumber/1" 
```

```javascript
const url = new URL("http://localhost/api/phonenumber/1");

let headers = {
    "Accept": "application/json",
    "Content-Type": "application/json",
}

fetch(url, {
    method: "PUT",
    headers: headers,
})
    .then(response => response.json())
    .then(json => console.log(json));
```



### HTTP Request
`PUT api/phonenumber/{phonenumber}`

`PATCH api/phonenumber/{phonenumber}`


<!-- END_c86f8531aa1820052dce7d0937cc4f40 -->

<!-- START_42cd31bb795f7c74528b4beae5abf14d -->
## Remove the specified resource from storage.

> Example request:

```bash
curl -X DELETE "http://localhost/api/phonenumber/1" 
```

```javascript
const url = new URL("http://localhost/api/phonenumber/1");

let headers = {
    "Accept": "application/json",
    "Content-Type": "application/json",
}

fetch(url, {
    method: "DELETE",
    headers: headers,
})
    .then(response => response.json())
    .then(json => console.log(json));
```



### HTTP Request
`DELETE api/phonenumber/{phonenumber}`


<!-- END_42cd31bb795f7c74528b4beae5abf14d -->

#Sim card management


<!-- START_0963deb6980a8bb803d14a3988b12620 -->
## Display a listing of the resource.

> Example request:

```bash
curl -X GET -G "http://localhost/api/simcard" 
```

```javascript
const url = new URL("http://localhost/api/simcard");

let headers = {
    "Accept": "application/json",
    "Content-Type": "application/json",
}

fetch(url, {
    method: "GET",
    headers: headers,
})
    .then(response => response.json())
    .then(json => console.log(json));
```


> Example response (200):

```json
[
    {
        "id": 79,
        "sim_number": 2710357,
        "network_provider_id": 2,
        "created_at": "2019-11-05 03:15:35",
        "updated_at": "2019-11-05 03:15:35",
        "networkprovider": {
            "id": 2,
            "name": "Oberbrunner, Strosin and Crooks",
            "created_at": "2019-11-05 03:14:23",
            "updated_at": "2019-11-05 03:14:23"
        }
    },
    {
        "id": 78,
        "sim_number": 9404363,
        "network_provider_id": 2,
        "created_at": "2019-11-05 03:15:35",
        "updated_at": "2019-11-05 03:15:35",
        "networkprovider": {
            "id": 2,
            "name": "Oberbrunner, Strosin and Crooks",
            "created_at": "2019-11-05 03:14:23",
            "updated_at": "2019-11-05 03:14:23"
        }
    },
    {
        "id": 77,
        "sim_number": 5627469,
        "network_provider_id": 2,
        "created_at": "2019-11-05 03:15:35",
        "updated_at": "2019-11-05 03:15:35",
        "networkprovider": {
            "id": 2,
            "name": "Oberbrunner, Strosin and Crooks",
            "created_at": "2019-11-05 03:14:23",
            "updated_at": "2019-11-05 03:14:23"
        }
    },
    {
        "id": 76,
        "sim_number": 6786652,
        "network_provider_id": 2,
        "created_at": "2019-11-05 03:15:35",
        "updated_at": "2019-11-05 03:15:35",
        "networkprovider": {
            "id": 2,
            "name": "Oberbrunner, Strosin and Crooks",
            "created_at": "2019-11-05 03:14:23",
            "updated_at": "2019-11-05 03:14:23"
        }
    },
    {
        "id": 75,
        "sim_number": 3355572,
        "network_provider_id": 2,
        "created_at": "2019-11-05 03:15:35",
        "updated_at": "2019-11-05 03:15:35",
        "networkprovider": {
            "id": 2,
            "name": "Oberbrunner, Strosin and Crooks",
            "created_at": "2019-11-05 03:14:23",
            "updated_at": "2019-11-05 03:14:23"
        }
    },
    {
        "id": 74,
        "sim_number": 5822093,
        "network_provider_id": 2,
        "created_at": "2019-11-05 03:15:35",
        "updated_at": "2019-11-05 03:15:35",
        "networkprovider": {
            "id": 2,
            "name": "Oberbrunner, Strosin and Crooks",
            "created_at": "2019-11-05 03:14:23",
            "updated_at": "2019-11-05 03:14:23"
        }
    },
    {
        "id": 73,
        "sim_number": 6119893,
        "network_provider_id": 2,
        "created_at": "2019-11-05 03:15:35",
        "updated_at": "2019-11-05 03:15:35",
        "networkprovider": {
            "id": 2,
            "name": "Oberbrunner, Strosin and Crooks",
            "created_at": "2019-11-05 03:14:23",
            "updated_at": "2019-11-05 03:14:23"
        }
    },
    {
        "id": 72,
        "sim_number": 6148596,
        "network_provider_id": 2,
        "created_at": "2019-11-05 03:15:35",
        "updated_at": "2019-11-05 03:15:35",
        "networkprovider": {
            "id": 2,
            "name": "Oberbrunner, Strosin and Crooks",
            "created_at": "2019-11-05 03:14:23",
            "updated_at": "2019-11-05 03:14:23"
        }
    },
    {
        "id": 71,
        "sim_number": 4808706,
        "network_provider_id": 2,
        "created_at": "2019-11-05 03:15:35",
        "updated_at": "2019-11-05 03:15:35",
        "networkprovider": {
            "id": 2,
            "name": "Oberbrunner, Strosin and Crooks",
            "created_at": "2019-11-05 03:14:23",
            "updated_at": "2019-11-05 03:14:23"
        }
    },
    {
        "id": 70,
        "sim_number": 8766395,
        "network_provider_id": 1,
        "created_at": "2019-11-05 03:15:35",
        "updated_at": "2019-11-05 03:15:35",
        "networkprovider": {
            "id": 1,
            "name": "Abshire Group",
            "created_at": "2019-11-05 03:14:22",
            "updated_at": "2019-11-05 03:14:22"
        }
    },
    {
        "id": 61,
        "sim_number": 4811986,
        "network_provider_id": 1,
        "created_at": "2019-11-05 03:15:35",
        "updated_at": "2019-11-05 03:15:35",
        "networkprovider": {
            "id": 1,
            "name": "Abshire Group",
            "created_at": "2019-11-05 03:14:22",
            "updated_at": "2019-11-05 03:14:22"
        }
    },
    {
        "id": 69,
        "sim_number": 1357570,
        "network_provider_id": 1,
        "created_at": "2019-11-05 03:15:35",
        "updated_at": "2019-11-05 03:15:35",
        "networkprovider": {
            "id": 1,
            "name": "Abshire Group",
            "created_at": "2019-11-05 03:14:22",
            "updated_at": "2019-11-05 03:14:22"
        }
    },
    {
        "id": 68,
        "sim_number": 5770823,
        "network_provider_id": 1,
        "created_at": "2019-11-05 03:15:35",
        "updated_at": "2019-11-05 03:15:35",
        "networkprovider": {
            "id": 1,
            "name": "Abshire Group",
            "created_at": "2019-11-05 03:14:22",
            "updated_at": "2019-11-05 03:14:22"
        }
    },
    {
        "id": 67,
        "sim_number": 2532287,
        "network_provider_id": 1,
        "created_at": "2019-11-05 03:15:35",
        "updated_at": "2019-11-05 03:15:35",
        "networkprovider": {
            "id": 1,
            "name": "Abshire Group",
            "created_at": "2019-11-05 03:14:22",
            "updated_at": "2019-11-05 03:14:22"
        }
    },
    {
        "id": 66,
        "sim_number": 2354405,
        "network_provider_id": 1,
        "created_at": "2019-11-05 03:15:35",
        "updated_at": "2019-11-05 03:15:35",
        "networkprovider": {
            "id": 1,
            "name": "Abshire Group",
            "created_at": "2019-11-05 03:14:22",
            "updated_at": "2019-11-05 03:14:22"
        }
    },
    {
        "id": 65,
        "sim_number": 5030431,
        "network_provider_id": 1,
        "created_at": "2019-11-05 03:15:35",
        "updated_at": "2019-11-05 03:15:35",
        "networkprovider": {
            "id": 1,
            "name": "Abshire Group",
            "created_at": "2019-11-05 03:14:22",
            "updated_at": "2019-11-05 03:14:22"
        }
    },
    {
        "id": 64,
        "sim_number": 3659221,
        "network_provider_id": 1,
        "created_at": "2019-11-05 03:15:35",
        "updated_at": "2019-11-05 03:15:35",
        "networkprovider": {
            "id": 1,
            "name": "Abshire Group",
            "created_at": "2019-11-05 03:14:22",
            "updated_at": "2019-11-05 03:14:22"
        }
    },
    {
        "id": 63,
        "sim_number": 6305961,
        "network_provider_id": 1,
        "created_at": "2019-11-05 03:15:35",
        "updated_at": "2019-11-05 03:15:35",
        "networkprovider": {
            "id": 1,
            "name": "Abshire Group",
            "created_at": "2019-11-05 03:14:22",
            "updated_at": "2019-11-05 03:14:22"
        }
    },
    {
        "id": 62,
        "sim_number": 1668661,
        "network_provider_id": 1,
        "created_at": "2019-11-05 03:15:35",
        "updated_at": "2019-11-05 03:15:35",
        "networkprovider": {
            "id": 1,
            "name": "Abshire Group",
            "created_at": "2019-11-05 03:14:22",
            "updated_at": "2019-11-05 03:14:22"
        }
    },
    {
        "id": 80,
        "sim_number": 1909264,
        "network_provider_id": 2,
        "created_at": "2019-11-05 03:15:35",
        "updated_at": "2019-11-05 03:15:35",
        "networkprovider": {
            "id": 2,
            "name": "Oberbrunner, Strosin and Crooks",
            "created_at": "2019-11-05 03:14:23",
            "updated_at": "2019-11-05 03:14:23"
        }
    },
    {
        "id": 40,
        "sim_number": 9344023,
        "network_provider_id": 2,
        "created_at": "2019-11-05 03:15:34",
        "updated_at": "2019-11-05 03:15:34",
        "networkprovider": {
            "id": 2,
            "name": "Oberbrunner, Strosin and Crooks",
            "created_at": "2019-11-05 03:14:23",
            "updated_at": "2019-11-05 03:14:23"
        }
    },
    {
        "id": 41,
        "sim_number": 4445213,
        "network_provider_id": 1,
        "created_at": "2019-11-05 03:15:34",
        "updated_at": "2019-11-05 03:15:34",
        "networkprovider": {
            "id": 1,
            "name": "Abshire Group",
            "created_at": "2019-11-05 03:14:22",
            "updated_at": "2019-11-05 03:14:22"
        }
    },
    {
        "id": 42,
        "sim_number": 1830511,
        "network_provider_id": 1,
        "created_at": "2019-11-05 03:15:34",
        "updated_at": "2019-11-05 03:15:34",
        "networkprovider": {
            "id": 1,
            "name": "Abshire Group",
            "created_at": "2019-11-05 03:14:22",
            "updated_at": "2019-11-05 03:14:22"
        }
    },
    {
        "id": 43,
        "sim_number": 4067772,
        "network_provider_id": 1,
        "created_at": "2019-11-05 03:15:34",
        "updated_at": "2019-11-05 03:15:34",
        "networkprovider": {
            "id": 1,
            "name": "Abshire Group",
            "created_at": "2019-11-05 03:14:22",
            "updated_at": "2019-11-05 03:14:22"
        }
    },
    {
        "id": 44,
        "sim_number": 6577406,
        "network_provider_id": 1,
        "created_at": "2019-11-05 03:15:34",
        "updated_at": "2019-11-05 03:15:34",
        "networkprovider": {
            "id": 1,
            "name": "Abshire Group",
            "created_at": "2019-11-05 03:14:22",
            "updated_at": "2019-11-05 03:14:22"
        }
    },
    {
        "id": 45,
        "sim_number": 7135521,
        "network_provider_id": 1,
        "created_at": "2019-11-05 03:15:34",
        "updated_at": "2019-11-05 03:15:34",
        "networkprovider": {
            "id": 1,
            "name": "Abshire Group",
            "created_at": "2019-11-05 03:14:22",
            "updated_at": "2019-11-05 03:14:22"
        }
    },
    {
        "id": 46,
        "sim_number": 8989760,
        "network_provider_id": 1,
        "created_at": "2019-11-05 03:15:34",
        "updated_at": "2019-11-05 03:15:34",
        "networkprovider": {
            "id": 1,
            "name": "Abshire Group",
            "created_at": "2019-11-05 03:14:22",
            "updated_at": "2019-11-05 03:14:22"
        }
    },
    {
        "id": 47,
        "sim_number": 6767954,
        "network_provider_id": 1,
        "created_at": "2019-11-05 03:15:34",
        "updated_at": "2019-11-05 03:15:34",
        "networkprovider": {
            "id": 1,
            "name": "Abshire Group",
            "created_at": "2019-11-05 03:14:22",
            "updated_at": "2019-11-05 03:14:22"
        }
    },
    {
        "id": 48,
        "sim_number": 6636675,
        "network_provider_id": 1,
        "created_at": "2019-11-05 03:15:34",
        "updated_at": "2019-11-05 03:15:34",
        "networkprovider": {
            "id": 1,
            "name": "Abshire Group",
            "created_at": "2019-11-05 03:14:22",
            "updated_at": "2019-11-05 03:14:22"
        }
    },
    {
        "id": 49,
        "sim_number": 6482302,
        "network_provider_id": 1,
        "created_at": "2019-11-05 03:15:34",
        "updated_at": "2019-11-05 03:15:34",
        "networkprovider": {
            "id": 1,
            "name": "Abshire Group",
            "created_at": "2019-11-05 03:14:22",
            "updated_at": "2019-11-05 03:14:22"
        }
    },
    {
        "id": 50,
        "sim_number": 3007855,
        "network_provider_id": 1,
        "created_at": "2019-11-05 03:15:34",
        "updated_at": "2019-11-05 03:15:34",
        "networkprovider": {
            "id": 1,
            "name": "Abshire Group",
            "created_at": "2019-11-05 03:14:22",
            "updated_at": "2019-11-05 03:14:22"
        }
    },
    {
        "id": 52,
        "sim_number": 3852743,
        "network_provider_id": 2,
        "created_at": "2019-11-05 03:15:34",
        "updated_at": "2019-11-05 03:15:34",
        "networkprovider": {
            "id": 2,
            "name": "Oberbrunner, Strosin and Crooks",
            "created_at": "2019-11-05 03:14:23",
            "updated_at": "2019-11-05 03:14:23"
        }
    },
    {
        "id": 53,
        "sim_number": 1063729,
        "network_provider_id": 2,
        "created_at": "2019-11-05 03:15:34",
        "updated_at": "2019-11-05 03:15:34",
        "networkprovider": {
            "id": 2,
            "name": "Oberbrunner, Strosin and Crooks",
            "created_at": "2019-11-05 03:14:23",
            "updated_at": "2019-11-05 03:14:23"
        }
    },
    {
        "id": 54,
        "sim_number": 4334889,
        "network_provider_id": 2,
        "created_at": "2019-11-05 03:15:34",
        "updated_at": "2019-11-05 03:15:34",
        "networkprovider": {
            "id": 2,
            "name": "Oberbrunner, Strosin and Crooks",
            "created_at": "2019-11-05 03:14:23",
            "updated_at": "2019-11-05 03:14:23"
        }
    },
    {
        "id": 55,
        "sim_number": 8168917,
        "network_provider_id": 2,
        "created_at": "2019-11-05 03:15:34",
        "updated_at": "2019-11-05 03:15:34",
        "networkprovider": {
            "id": 2,
            "name": "Oberbrunner, Strosin and Crooks",
            "created_at": "2019-11-05 03:14:23",
            "updated_at": "2019-11-05 03:14:23"
        }
    },
    {
        "id": 56,
        "sim_number": 6891476,
        "network_provider_id": 2,
        "created_at": "2019-11-05 03:15:34",
        "updated_at": "2019-11-05 03:15:34",
        "networkprovider": {
            "id": 2,
            "name": "Oberbrunner, Strosin and Crooks",
            "created_at": "2019-11-05 03:14:23",
            "updated_at": "2019-11-05 03:14:23"
        }
    },
    {
        "id": 57,
        "sim_number": 1915248,
        "network_provider_id": 2,
        "created_at": "2019-11-05 03:15:34",
        "updated_at": "2019-11-05 03:15:34",
        "networkprovider": {
            "id": 2,
            "name": "Oberbrunner, Strosin and Crooks",
            "created_at": "2019-11-05 03:14:23",
            "updated_at": "2019-11-05 03:14:23"
        }
    },
    {
        "id": 58,
        "sim_number": 9165990,
        "network_provider_id": 2,
        "created_at": "2019-11-05 03:15:34",
        "updated_at": "2019-11-05 03:15:34",
        "networkprovider": {
            "id": 2,
            "name": "Oberbrunner, Strosin and Crooks",
            "created_at": "2019-11-05 03:14:23",
            "updated_at": "2019-11-05 03:14:23"
        }
    },
    {
        "id": 59,
        "sim_number": 7062530,
        "network_provider_id": 2,
        "created_at": "2019-11-05 03:15:34",
        "updated_at": "2019-11-05 03:15:34",
        "networkprovider": {
            "id": 2,
            "name": "Oberbrunner, Strosin and Crooks",
            "created_at": "2019-11-05 03:14:23",
            "updated_at": "2019-11-05 03:14:23"
        }
    },
    {
        "id": 60,
        "sim_number": 3490928,
        "network_provider_id": 2,
        "created_at": "2019-11-05 03:15:34",
        "updated_at": "2019-11-05 03:15:34",
        "networkprovider": {
            "id": 2,
            "name": "Oberbrunner, Strosin and Crooks",
            "created_at": "2019-11-05 03:14:23",
            "updated_at": "2019-11-05 03:14:23"
        }
    },
    {
        "id": 51,
        "sim_number": 4092044,
        "network_provider_id": 2,
        "created_at": "2019-11-05 03:15:34",
        "updated_at": "2019-11-05 03:15:34",
        "networkprovider": {
            "id": 2,
            "name": "Oberbrunner, Strosin and Crooks",
            "created_at": "2019-11-05 03:14:23",
            "updated_at": "2019-11-05 03:14:23"
        }
    },
    {
        "id": 21,
        "sim_number": 9525794,
        "network_provider_id": 1,
        "created_at": "2019-11-05 03:15:34",
        "updated_at": "2019-11-05 03:15:34",
        "networkprovider": {
            "id": 1,
            "name": "Abshire Group",
            "created_at": "2019-11-05 03:14:22",
            "updated_at": "2019-11-05 03:14:22"
        }
    },
    {
        "id": 22,
        "sim_number": 4372438,
        "network_provider_id": 1,
        "created_at": "2019-11-05 03:15:34",
        "updated_at": "2019-11-05 03:15:34",
        "networkprovider": {
            "id": 1,
            "name": "Abshire Group",
            "created_at": "2019-11-05 03:14:22",
            "updated_at": "2019-11-05 03:14:22"
        }
    },
    {
        "id": 23,
        "sim_number": 3734881,
        "network_provider_id": 1,
        "created_at": "2019-11-05 03:15:34",
        "updated_at": "2019-11-05 03:15:34",
        "networkprovider": {
            "id": 1,
            "name": "Abshire Group",
            "created_at": "2019-11-05 03:14:22",
            "updated_at": "2019-11-05 03:14:22"
        }
    },
    {
        "id": 24,
        "sim_number": 4584329,
        "network_provider_id": 1,
        "created_at": "2019-11-05 03:15:34",
        "updated_at": "2019-11-05 03:15:34",
        "networkprovider": {
            "id": 1,
            "name": "Abshire Group",
            "created_at": "2019-11-05 03:14:22",
            "updated_at": "2019-11-05 03:14:22"
        }
    },
    {
        "id": 25,
        "sim_number": 2689744,
        "network_provider_id": 1,
        "created_at": "2019-11-05 03:15:34",
        "updated_at": "2019-11-05 03:15:34",
        "networkprovider": {
            "id": 1,
            "name": "Abshire Group",
            "created_at": "2019-11-05 03:14:22",
            "updated_at": "2019-11-05 03:14:22"
        }
    },
    {
        "id": 26,
        "sim_number": 1970976,
        "network_provider_id": 1,
        "created_at": "2019-11-05 03:15:34",
        "updated_at": "2019-11-05 03:15:34",
        "networkprovider": {
            "id": 1,
            "name": "Abshire Group",
            "created_at": "2019-11-05 03:14:22",
            "updated_at": "2019-11-05 03:14:22"
        }
    },
    {
        "id": 27,
        "sim_number": 7838878,
        "network_provider_id": 1,
        "created_at": "2019-11-05 03:15:34",
        "updated_at": "2019-11-05 03:15:34",
        "networkprovider": {
            "id": 1,
            "name": "Abshire Group",
            "created_at": "2019-11-05 03:14:22",
            "updated_at": "2019-11-05 03:14:22"
        }
    },
    {
        "id": 28,
        "sim_number": 6396457,
        "network_provider_id": 1,
        "created_at": "2019-11-05 03:15:34",
        "updated_at": "2019-11-05 03:15:34",
        "networkprovider": {
            "id": 1,
            "name": "Abshire Group",
            "created_at": "2019-11-05 03:14:22",
            "updated_at": "2019-11-05 03:14:22"
        }
    },
    {
        "id": 29,
        "sim_number": 3720294,
        "network_provider_id": 1,
        "created_at": "2019-11-05 03:15:34",
        "updated_at": "2019-11-05 03:15:34",
        "networkprovider": {
            "id": 1,
            "name": "Abshire Group",
            "created_at": "2019-11-05 03:14:22",
            "updated_at": "2019-11-05 03:14:22"
        }
    },
    {
        "id": 30,
        "sim_number": 8281376,
        "network_provider_id": 1,
        "created_at": "2019-11-05 03:15:34",
        "updated_at": "2019-11-05 03:15:34",
        "networkprovider": {
            "id": 1,
            "name": "Abshire Group",
            "created_at": "2019-11-05 03:14:22",
            "updated_at": "2019-11-05 03:14:22"
        }
    },
    {
        "id": 31,
        "sim_number": 5812300,
        "network_provider_id": 2,
        "created_at": "2019-11-05 03:15:34",
        "updated_at": "2019-11-05 03:15:34",
        "networkprovider": {
            "id": 2,
            "name": "Oberbrunner, Strosin and Crooks",
            "created_at": "2019-11-05 03:14:23",
            "updated_at": "2019-11-05 03:14:23"
        }
    },
    {
        "id": 32,
        "sim_number": 7342028,
        "network_provider_id": 2,
        "created_at": "2019-11-05 03:15:34",
        "updated_at": "2019-11-05 03:15:34",
        "networkprovider": {
            "id": 2,
            "name": "Oberbrunner, Strosin and Crooks",
            "created_at": "2019-11-05 03:14:23",
            "updated_at": "2019-11-05 03:14:23"
        }
    },
    {
        "id": 33,
        "sim_number": 6786612,
        "network_provider_id": 2,
        "created_at": "2019-11-05 03:15:34",
        "updated_at": "2019-11-05 03:15:34",
        "networkprovider": {
            "id": 2,
            "name": "Oberbrunner, Strosin and Crooks",
            "created_at": "2019-11-05 03:14:23",
            "updated_at": "2019-11-05 03:14:23"
        }
    },
    {
        "id": 34,
        "sim_number": 7729928,
        "network_provider_id": 2,
        "created_at": "2019-11-05 03:15:34",
        "updated_at": "2019-11-05 03:15:34",
        "networkprovider": {
            "id": 2,
            "name": "Oberbrunner, Strosin and Crooks",
            "created_at": "2019-11-05 03:14:23",
            "updated_at": "2019-11-05 03:14:23"
        }
    },
    {
        "id": 35,
        "sim_number": 4007877,
        "network_provider_id": 2,
        "created_at": "2019-11-05 03:15:34",
        "updated_at": "2019-11-05 03:15:34",
        "networkprovider": {
            "id": 2,
            "name": "Oberbrunner, Strosin and Crooks",
            "created_at": "2019-11-05 03:14:23",
            "updated_at": "2019-11-05 03:14:23"
        }
    },
    {
        "id": 36,
        "sim_number": 8567078,
        "network_provider_id": 2,
        "created_at": "2019-11-05 03:15:34",
        "updated_at": "2019-11-05 03:15:34",
        "networkprovider": {
            "id": 2,
            "name": "Oberbrunner, Strosin and Crooks",
            "created_at": "2019-11-05 03:14:23",
            "updated_at": "2019-11-05 03:14:23"
        }
    },
    {
        "id": 37,
        "sim_number": 9413013,
        "network_provider_id": 2,
        "created_at": "2019-11-05 03:15:34",
        "updated_at": "2019-11-05 03:15:34",
        "networkprovider": {
            "id": 2,
            "name": "Oberbrunner, Strosin and Crooks",
            "created_at": "2019-11-05 03:14:23",
            "updated_at": "2019-11-05 03:14:23"
        }
    },
    {
        "id": 38,
        "sim_number": 6295898,
        "network_provider_id": 2,
        "created_at": "2019-11-05 03:15:34",
        "updated_at": "2019-11-05 03:15:34",
        "networkprovider": {
            "id": 2,
            "name": "Oberbrunner, Strosin and Crooks",
            "created_at": "2019-11-05 03:14:23",
            "updated_at": "2019-11-05 03:14:23"
        }
    },
    {
        "id": 39,
        "sim_number": 7720864,
        "network_provider_id": 2,
        "created_at": "2019-11-05 03:15:34",
        "updated_at": "2019-11-05 03:15:34",
        "networkprovider": {
            "id": 2,
            "name": "Oberbrunner, Strosin and Crooks",
            "created_at": "2019-11-05 03:14:23",
            "updated_at": "2019-11-05 03:14:23"
        }
    },
    {
        "id": 1,
        "sim_number": 9858243,
        "network_provider_id": 1,
        "created_at": "2019-11-05 03:14:23",
        "updated_at": "2019-11-05 03:14:23",
        "networkprovider": {
            "id": 1,
            "name": "Abshire Group",
            "created_at": "2019-11-05 03:14:22",
            "updated_at": "2019-11-05 03:14:22"
        }
    },
    {
        "id": 20,
        "sim_number": 4146546,
        "network_provider_id": 2,
        "created_at": "2019-11-05 03:14:23",
        "updated_at": "2019-11-05 03:14:23",
        "networkprovider": {
            "id": 2,
            "name": "Oberbrunner, Strosin and Crooks",
            "created_at": "2019-11-05 03:14:23",
            "updated_at": "2019-11-05 03:14:23"
        }
    },
    {
        "id": 19,
        "sim_number": 2671637,
        "network_provider_id": 2,
        "created_at": "2019-11-05 03:14:23",
        "updated_at": "2019-11-05 03:14:23",
        "networkprovider": {
            "id": 2,
            "name": "Oberbrunner, Strosin and Crooks",
            "created_at": "2019-11-05 03:14:23",
            "updated_at": "2019-11-05 03:14:23"
        }
    },
    {
        "id": 18,
        "sim_number": 9315388,
        "network_provider_id": 2,
        "created_at": "2019-11-05 03:14:23",
        "updated_at": "2019-11-05 03:14:23",
        "networkprovider": {
            "id": 2,
            "name": "Oberbrunner, Strosin and Crooks",
            "created_at": "2019-11-05 03:14:23",
            "updated_at": "2019-11-05 03:14:23"
        }
    },
    {
        "id": 17,
        "sim_number": 2659585,
        "network_provider_id": 2,
        "created_at": "2019-11-05 03:14:23",
        "updated_at": "2019-11-05 03:14:23",
        "networkprovider": {
            "id": 2,
            "name": "Oberbrunner, Strosin and Crooks",
            "created_at": "2019-11-05 03:14:23",
            "updated_at": "2019-11-05 03:14:23"
        }
    },
    {
        "id": 16,
        "sim_number": 9175032,
        "network_provider_id": 2,
        "created_at": "2019-11-05 03:14:23",
        "updated_at": "2019-11-05 03:14:23",
        "networkprovider": {
            "id": 2,
            "name": "Oberbrunner, Strosin and Crooks",
            "created_at": "2019-11-05 03:14:23",
            "updated_at": "2019-11-05 03:14:23"
        }
    },
    {
        "id": 15,
        "sim_number": 6627913,
        "network_provider_id": 2,
        "created_at": "2019-11-05 03:14:23",
        "updated_at": "2019-11-05 03:14:23",
        "networkprovider": {
            "id": 2,
            "name": "Oberbrunner, Strosin and Crooks",
            "created_at": "2019-11-05 03:14:23",
            "updated_at": "2019-11-05 03:14:23"
        }
    },
    {
        "id": 14,
        "sim_number": 5763774,
        "network_provider_id": 2,
        "created_at": "2019-11-05 03:14:23",
        "updated_at": "2019-11-05 03:14:23",
        "networkprovider": {
            "id": 2,
            "name": "Oberbrunner, Strosin and Crooks",
            "created_at": "2019-11-05 03:14:23",
            "updated_at": "2019-11-05 03:14:23"
        }
    },
    {
        "id": 13,
        "sim_number": 7230547,
        "network_provider_id": 2,
        "created_at": "2019-11-05 03:14:23",
        "updated_at": "2019-11-05 03:14:23",
        "networkprovider": {
            "id": 2,
            "name": "Oberbrunner, Strosin and Crooks",
            "created_at": "2019-11-05 03:14:23",
            "updated_at": "2019-11-05 03:14:23"
        }
    },
    {
        "id": 12,
        "sim_number": 2656162,
        "network_provider_id": 2,
        "created_at": "2019-11-05 03:14:23",
        "updated_at": "2019-11-05 03:14:23",
        "networkprovider": {
            "id": 2,
            "name": "Oberbrunner, Strosin and Crooks",
            "created_at": "2019-11-05 03:14:23",
            "updated_at": "2019-11-05 03:14:23"
        }
    },
    {
        "id": 11,
        "sim_number": 8665376,
        "network_provider_id": 2,
        "created_at": "2019-11-05 03:14:23",
        "updated_at": "2019-11-05 03:14:23",
        "networkprovider": {
            "id": 2,
            "name": "Oberbrunner, Strosin and Crooks",
            "created_at": "2019-11-05 03:14:23",
            "updated_at": "2019-11-05 03:14:23"
        }
    },
    {
        "id": 10,
        "sim_number": 2538816,
        "network_provider_id": 1,
        "created_at": "2019-11-05 03:14:23",
        "updated_at": "2019-11-05 03:14:23",
        "networkprovider": {
            "id": 1,
            "name": "Abshire Group",
            "created_at": "2019-11-05 03:14:22",
            "updated_at": "2019-11-05 03:14:22"
        }
    },
    {
        "id": 9,
        "sim_number": 5680700,
        "network_provider_id": 1,
        "created_at": "2019-11-05 03:14:23",
        "updated_at": "2019-11-05 03:14:23",
        "networkprovider": {
            "id": 1,
            "name": "Abshire Group",
            "created_at": "2019-11-05 03:14:22",
            "updated_at": "2019-11-05 03:14:22"
        }
    },
    {
        "id": 8,
        "sim_number": 2813444,
        "network_provider_id": 1,
        "created_at": "2019-11-05 03:14:23",
        "updated_at": "2019-11-05 03:14:23",
        "networkprovider": {
            "id": 1,
            "name": "Abshire Group",
            "created_at": "2019-11-05 03:14:22",
            "updated_at": "2019-11-05 03:14:22"
        }
    },
    {
        "id": 7,
        "sim_number": 5907771,
        "network_provider_id": 1,
        "created_at": "2019-11-05 03:14:23",
        "updated_at": "2019-11-05 03:14:23",
        "networkprovider": {
            "id": 1,
            "name": "Abshire Group",
            "created_at": "2019-11-05 03:14:22",
            "updated_at": "2019-11-05 03:14:22"
        }
    },
    {
        "id": 6,
        "sim_number": 7140977,
        "network_provider_id": 1,
        "created_at": "2019-11-05 03:14:23",
        "updated_at": "2019-11-05 03:14:23",
        "networkprovider": {
            "id": 1,
            "name": "Abshire Group",
            "created_at": "2019-11-05 03:14:22",
            "updated_at": "2019-11-05 03:14:22"
        }
    },
    {
        "id": 5,
        "sim_number": 2159993,
        "network_provider_id": 1,
        "created_at": "2019-11-05 03:14:23",
        "updated_at": "2019-11-05 03:14:23",
        "networkprovider": {
            "id": 1,
            "name": "Abshire Group",
            "created_at": "2019-11-05 03:14:22",
            "updated_at": "2019-11-05 03:14:22"
        }
    },
    {
        "id": 4,
        "sim_number": 7843260,
        "network_provider_id": 1,
        "created_at": "2019-11-05 03:14:23",
        "updated_at": "2019-11-05 03:14:23",
        "networkprovider": {
            "id": 1,
            "name": "Abshire Group",
            "created_at": "2019-11-05 03:14:22",
            "updated_at": "2019-11-05 03:14:22"
        }
    },
    {
        "id": 3,
        "sim_number": 4188568,
        "network_provider_id": 1,
        "created_at": "2019-11-05 03:14:23",
        "updated_at": "2019-11-05 03:14:23",
        "networkprovider": {
            "id": 1,
            "name": "Abshire Group",
            "created_at": "2019-11-05 03:14:22",
            "updated_at": "2019-11-05 03:14:22"
        }
    },
    {
        "id": 2,
        "sim_number": 6671885,
        "network_provider_id": 1,
        "created_at": "2019-11-05 03:14:23",
        "updated_at": "2019-11-05 03:14:23",
        "networkprovider": {
            "id": 1,
            "name": "Abshire Group",
            "created_at": "2019-11-05 03:14:22",
            "updated_at": "2019-11-05 03:14:22"
        }
    }
]
```

### HTTP Request
`GET api/simcard`


<!-- END_0963deb6980a8bb803d14a3988b12620 -->

<!-- START_ec18376996c073de38738c514a80c5a3 -->
## Store a newly created resource in storage.

> Example request:

```bash
curl -X POST "http://localhost/api/simcard" 
```

```javascript
const url = new URL("http://localhost/api/simcard");

let headers = {
    "Accept": "application/json",
    "Content-Type": "application/json",
}

fetch(url, {
    method: "POST",
    headers: headers,
})
    .then(response => response.json())
    .then(json => console.log(json));
```



### HTTP Request
`POST api/simcard`


<!-- END_ec18376996c073de38738c514a80c5a3 -->

<!-- START_6c0a92c1864273af24e8241c0dda5c72 -->
## Display the specified resource.

> Example request:

```bash
curl -X GET -G "http://localhost/api/simcard/1" 
```

```javascript
const url = new URL("http://localhost/api/simcard/1");

let headers = {
    "Accept": "application/json",
    "Content-Type": "application/json",
}

fetch(url, {
    method: "GET",
    headers: headers,
})
    .then(response => response.json())
    .then(json => console.log(json));
```


> Example response (200):

```json
{
    "id": 1,
    "sim_number": 9858243,
    "network_provider_id": 1,
    "created_at": "2019-11-05 03:14:23",
    "updated_at": "2019-11-05 03:14:23",
    "networkprovider": {
        "id": 1,
        "name": "Abshire Group",
        "created_at": "2019-11-05 03:14:22",
        "updated_at": "2019-11-05 03:14:22"
    }
}
```

### HTTP Request
`GET api/simcard/{simcard}`


<!-- END_6c0a92c1864273af24e8241c0dda5c72 -->

<!-- START_88b26992d55c179ccf2162e993df8c0b -->
## Update the specified resource in storage.

> Example request:

```bash
curl -X PUT "http://localhost/api/simcard/1" 
```

```javascript
const url = new URL("http://localhost/api/simcard/1");

let headers = {
    "Accept": "application/json",
    "Content-Type": "application/json",
}

fetch(url, {
    method: "PUT",
    headers: headers,
})
    .then(response => response.json())
    .then(json => console.log(json));
```



### HTTP Request
`PUT api/simcard/{simcard}`

`PATCH api/simcard/{simcard}`


<!-- END_88b26992d55c179ccf2162e993df8c0b -->

<!-- START_66259a0e505c539318ae64e8221f2a54 -->
## Remove the specified resource from storage.

> Example request:

```bash
curl -X DELETE "http://localhost/api/simcard/1" 
```

```javascript
const url = new URL("http://localhost/api/simcard/1");

let headers = {
    "Accept": "application/json",
    "Content-Type": "application/json",
}

fetch(url, {
    method: "DELETE",
    headers: headers,
})
    .then(response => response.json())
    .then(json => console.log(json));
```



### HTTP Request
`DELETE api/simcard/{simcard}`


<!-- END_66259a0e505c539318ae64e8221f2a54 -->

#User management


<!-- START_2b6e5a4b188cb183c7e59558cce36cb6 -->
## Display a listing of the resource.

> Example request:

```bash
curl -X GET -G "http://localhost/api/user" 
```

```javascript
const url = new URL("http://localhost/api/user");

let headers = {
    "Accept": "application/json",
    "Content-Type": "application/json",
}

fetch(url, {
    method: "GET",
    headers: headers,
})
    .then(response => response.json())
    .then(json => console.log(json));
```


> Example response (200):

```json
[
    {
        "id": 31,
        "name": "Diego Stracke",
        "email": "alang@example.org",
        "email_verified_at": "2019-11-05 03:15:35",
        "created_at": "2019-11-05 03:15:35",
        "updated_at": "2019-11-05 03:15:35"
    },
    {
        "id": 39,
        "name": "Branson Bosco",
        "email": "adella.abshire@example.org",
        "email_verified_at": "2019-11-05 03:15:35",
        "created_at": "2019-11-05 03:15:35",
        "updated_at": "2019-11-05 03:15:35"
    },
    {
        "id": 38,
        "name": "Miss Corine Nitzsche Sr.",
        "email": "cordell34@example.com",
        "email_verified_at": "2019-11-05 03:15:35",
        "created_at": "2019-11-05 03:15:35",
        "updated_at": "2019-11-05 03:15:35"
    },
    {
        "id": 37,
        "name": "Reece White",
        "email": "eliza53@example.org",
        "email_verified_at": "2019-11-05 03:15:35",
        "created_at": "2019-11-05 03:15:35",
        "updated_at": "2019-11-05 03:15:35"
    },
    {
        "id": 36,
        "name": "Prof. Westley Bergstrom",
        "email": "jfahey@example.org",
        "email_verified_at": "2019-11-05 03:15:35",
        "created_at": "2019-11-05 03:15:35",
        "updated_at": "2019-11-05 03:15:35"
    },
    {
        "id": 35,
        "name": "Prof. Jess Dibbert V",
        "email": "kathryne89@example.com",
        "email_verified_at": "2019-11-05 03:15:35",
        "created_at": "2019-11-05 03:15:35",
        "updated_at": "2019-11-05 03:15:35"
    },
    {
        "id": 34,
        "name": "Cheyanne Cruickshank",
        "email": "kassandra28@example.com",
        "email_verified_at": "2019-11-05 03:15:35",
        "created_at": "2019-11-05 03:15:35",
        "updated_at": "2019-11-05 03:15:35"
    },
    {
        "id": 33,
        "name": "Prof. Toby Bruen Sr.",
        "email": "renner.casey@example.org",
        "email_verified_at": "2019-11-05 03:15:35",
        "created_at": "2019-11-05 03:15:35",
        "updated_at": "2019-11-05 03:15:35"
    },
    {
        "id": 32,
        "name": "Ms. Ophelia Gleason",
        "email": "hansen.presley@example.net",
        "email_verified_at": "2019-11-05 03:15:35",
        "created_at": "2019-11-05 03:15:35",
        "updated_at": "2019-11-05 03:15:35"
    },
    {
        "id": 40,
        "name": "Bernie Hagenes Sr.",
        "email": "medhurst.katheryn@example.org",
        "email_verified_at": "2019-11-05 03:15:35",
        "created_at": "2019-11-05 03:15:35",
        "updated_at": "2019-11-05 03:15:35"
    },
    {
        "id": 20,
        "name": "Cullen Miller",
        "email": "harvey.myrtice@example.com",
        "email_verified_at": "2019-11-05 03:15:34",
        "created_at": "2019-11-05 03:15:34",
        "updated_at": "2019-11-05 03:15:34"
    },
    {
        "id": 22,
        "name": "Jamaal Nikolaus",
        "email": "jessika92@example.net",
        "email_verified_at": "2019-11-05 03:15:34",
        "created_at": "2019-11-05 03:15:34",
        "updated_at": "2019-11-05 03:15:34"
    },
    {
        "id": 23,
        "name": "Molly Streich",
        "email": "afton47@example.com",
        "email_verified_at": "2019-11-05 03:15:34",
        "created_at": "2019-11-05 03:15:34",
        "updated_at": "2019-11-05 03:15:34"
    },
    {
        "id": 24,
        "name": "Elroy Kihn",
        "email": "julianne.grady@example.net",
        "email_verified_at": "2019-11-05 03:15:34",
        "created_at": "2019-11-05 03:15:34",
        "updated_at": "2019-11-05 03:15:34"
    },
    {
        "id": 25,
        "name": "Leilani Graham",
        "email": "savion.dicki@example.org",
        "email_verified_at": "2019-11-05 03:15:34",
        "created_at": "2019-11-05 03:15:34",
        "updated_at": "2019-11-05 03:15:34"
    },
    {
        "id": 26,
        "name": "Boyd Will",
        "email": "rodger59@example.com",
        "email_verified_at": "2019-11-05 03:15:34",
        "created_at": "2019-11-05 03:15:34",
        "updated_at": "2019-11-05 03:15:34"
    },
    {
        "id": 27,
        "name": "Timmothy Morissette",
        "email": "zturcotte@example.org",
        "email_verified_at": "2019-11-05 03:15:34",
        "created_at": "2019-11-05 03:15:34",
        "updated_at": "2019-11-05 03:15:34"
    },
    {
        "id": 28,
        "name": "Muriel Hirthe",
        "email": "bryce.predovic@example.net",
        "email_verified_at": "2019-11-05 03:15:34",
        "created_at": "2019-11-05 03:15:34",
        "updated_at": "2019-11-05 03:15:34"
    },
    {
        "id": 29,
        "name": "Lisandro Emmerich",
        "email": "hill.jillian@example.org",
        "email_verified_at": "2019-11-05 03:15:34",
        "created_at": "2019-11-05 03:15:34",
        "updated_at": "2019-11-05 03:15:34"
    },
    {
        "id": 30,
        "name": "Sarah Gottlieb",
        "email": "raphael14@example.org",
        "email_verified_at": "2019-11-05 03:15:34",
        "created_at": "2019-11-05 03:15:34",
        "updated_at": "2019-11-05 03:15:34"
    },
    {
        "id": 21,
        "name": "Lurline McLaughlin",
        "email": "alison.christiansen@example.net",
        "email_verified_at": "2019-11-05 03:15:34",
        "created_at": "2019-11-05 03:15:34",
        "updated_at": "2019-11-05 03:15:34"
    },
    {
        "id": 11,
        "name": "Ottilie Ebert",
        "email": "mccullough.audie@example.com",
        "email_verified_at": "2019-11-05 03:15:34",
        "created_at": "2019-11-05 03:15:34",
        "updated_at": "2019-11-05 03:15:34"
    },
    {
        "id": 12,
        "name": "Laisha Bartell DVM",
        "email": "rempel.bessie@example.org",
        "email_verified_at": "2019-11-05 03:15:34",
        "created_at": "2019-11-05 03:15:34",
        "updated_at": "2019-11-05 03:15:34"
    },
    {
        "id": 13,
        "name": "Jonathan Wiza",
        "email": "tolson@example.com",
        "email_verified_at": "2019-11-05 03:15:34",
        "created_at": "2019-11-05 03:15:34",
        "updated_at": "2019-11-05 03:15:34"
    },
    {
        "id": 14,
        "name": "Alycia Ortiz",
        "email": "lisette.spinka@example.net",
        "email_verified_at": "2019-11-05 03:15:34",
        "created_at": "2019-11-05 03:15:34",
        "updated_at": "2019-11-05 03:15:34"
    },
    {
        "id": 15,
        "name": "Neva Cremin",
        "email": "jakayla.schmeler@example.org",
        "email_verified_at": "2019-11-05 03:15:34",
        "created_at": "2019-11-05 03:15:34",
        "updated_at": "2019-11-05 03:15:34"
    },
    {
        "id": 16,
        "name": "Adelbert Gerhold Sr.",
        "email": "oral.walsh@example.org",
        "email_verified_at": "2019-11-05 03:15:34",
        "created_at": "2019-11-05 03:15:34",
        "updated_at": "2019-11-05 03:15:34"
    },
    {
        "id": 17,
        "name": "Zane Lynch",
        "email": "lakin.efrain@example.org",
        "email_verified_at": "2019-11-05 03:15:34",
        "created_at": "2019-11-05 03:15:34",
        "updated_at": "2019-11-05 03:15:34"
    },
    {
        "id": 18,
        "name": "Prof. Nestor Wehner",
        "email": "ora.bechtelar@example.com",
        "email_verified_at": "2019-11-05 03:15:34",
        "created_at": "2019-11-05 03:15:34",
        "updated_at": "2019-11-05 03:15:34"
    },
    {
        "id": 19,
        "name": "Myrtis Harber",
        "email": "tankunding@example.org",
        "email_verified_at": "2019-11-05 03:15:34",
        "created_at": "2019-11-05 03:15:34",
        "updated_at": "2019-11-05 03:15:34"
    },
    {
        "id": 1,
        "name": "Winnifred Casper",
        "email": "torphy.nova@example.net",
        "email_verified_at": "2019-11-05 03:14:23",
        "created_at": "2019-11-05 03:14:23",
        "updated_at": "2019-11-05 03:14:23"
    },
    {
        "id": 10,
        "name": "Jesus Corkery",
        "email": "cordelia.dietrich@example.org",
        "email_verified_at": "2019-11-05 03:14:23",
        "created_at": "2019-11-05 03:14:23",
        "updated_at": "2019-11-05 03:14:23"
    },
    {
        "id": 9,
        "name": "Mr. Price Hudson",
        "email": "yschimmel@example.org",
        "email_verified_at": "2019-11-05 03:14:23",
        "created_at": "2019-11-05 03:14:23",
        "updated_at": "2019-11-05 03:14:23"
    },
    {
        "id": 8,
        "name": "Prof. Milo Nitzsche Jr.",
        "email": "chloe66@example.com",
        "email_verified_at": "2019-11-05 03:14:23",
        "created_at": "2019-11-05 03:14:23",
        "updated_at": "2019-11-05 03:14:23"
    },
    {
        "id": 7,
        "name": "Dr. Felton Heidenreich DVM",
        "email": "felicity.sawayn@example.org",
        "email_verified_at": "2019-11-05 03:14:23",
        "created_at": "2019-11-05 03:14:23",
        "updated_at": "2019-11-05 03:14:23"
    },
    {
        "id": 6,
        "name": "Felicity Runolfsdottir",
        "email": "schaden.torrey@example.org",
        "email_verified_at": "2019-11-05 03:14:23",
        "created_at": "2019-11-05 03:14:23",
        "updated_at": "2019-11-05 03:14:23"
    },
    {
        "id": 5,
        "name": "Kayden Osinski",
        "email": "whills@example.net",
        "email_verified_at": "2019-11-05 03:14:23",
        "created_at": "2019-11-05 03:14:23",
        "updated_at": "2019-11-05 03:14:23"
    },
    {
        "id": 4,
        "name": "Robyn Morissette",
        "email": "tillman.karl@example.com",
        "email_verified_at": "2019-11-05 03:14:23",
        "created_at": "2019-11-05 03:14:23",
        "updated_at": "2019-11-05 03:14:23"
    },
    {
        "id": 3,
        "name": "Frederic Shields",
        "email": "jacques62@example.org",
        "email_verified_at": "2019-11-05 03:14:23",
        "created_at": "2019-11-05 03:14:23",
        "updated_at": "2019-11-05 03:14:23"
    },
    {
        "id": 2,
        "name": "Melvina Wintheiser",
        "email": "elmira.kihn@example.net",
        "email_verified_at": "2019-11-05 03:14:23",
        "created_at": "2019-11-05 03:14:23",
        "updated_at": "2019-11-05 03:14:23"
    }
]
```

### HTTP Request
`GET api/user`


<!-- END_2b6e5a4b188cb183c7e59558cce36cb6 -->

<!-- START_f0654d3f2fc63c11f5723f233cc53c83 -->
## Store a newly created resource in storage.

> Example request:

```bash
curl -X POST "http://localhost/api/user" 
```

```javascript
const url = new URL("http://localhost/api/user");

let headers = {
    "Accept": "application/json",
    "Content-Type": "application/json",
}

fetch(url, {
    method: "POST",
    headers: headers,
})
    .then(response => response.json())
    .then(json => console.log(json));
```



### HTTP Request
`POST api/user`


<!-- END_f0654d3f2fc63c11f5723f233cc53c83 -->

<!-- START_ceec0e0b1d13d731ad96603d26bccc2f -->
## Display the specified resource.

> Example request:

```bash
curl -X GET -G "http://localhost/api/user/1" 
```

```javascript
const url = new URL("http://localhost/api/user/1");

let headers = {
    "Accept": "application/json",
    "Content-Type": "application/json",
}

fetch(url, {
    method: "GET",
    headers: headers,
})
    .then(response => response.json())
    .then(json => console.log(json));
```


> Example response (200):

```json
{
    "id": 1,
    "name": "Winnifred Casper",
    "email": "torphy.nova@example.net",
    "email_verified_at": "2019-11-05 03:14:23",
    "created_at": "2019-11-05 03:14:23",
    "updated_at": "2019-11-05 03:14:23"
}
```

### HTTP Request
`GET api/user/{user}`


<!-- END_ceec0e0b1d13d731ad96603d26bccc2f -->

<!-- START_a4a2abed1e8e8cad5e6a3282812fe3f3 -->
## Update the specified resource in storage.

> Example request:

```bash
curl -X PUT "http://localhost/api/user/1" 
```

```javascript
const url = new URL("http://localhost/api/user/1");

let headers = {
    "Accept": "application/json",
    "Content-Type": "application/json",
}

fetch(url, {
    method: "PUT",
    headers: headers,
})
    .then(response => response.json())
    .then(json => console.log(json));
```



### HTTP Request
`PUT api/user/{user}`

`PATCH api/user/{user}`


<!-- END_a4a2abed1e8e8cad5e6a3282812fe3f3 -->

<!-- START_4bb7fb4a7501d3cb1ed21acfc3b205a9 -->
## Remove the specified resource from storage.

> Example request:

```bash
curl -X DELETE "http://localhost/api/user/1" 
```

```javascript
const url = new URL("http://localhost/api/user/1");

let headers = {
    "Accept": "application/json",
    "Content-Type": "application/json",
}

fetch(url, {
    method: "DELETE",
    headers: headers,
})
    .then(response => response.json())
    .then(json => console.log(json));
```



### HTTP Request
`DELETE api/user/{user}`


<!-- END_4bb7fb4a7501d3cb1ed21acfc3b205a9 -->


