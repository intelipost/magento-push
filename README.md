magento-push


### Para usar o observer criado para salvar NFES:

* deve-se criar uma variável na mesma estrutura do evento e envia-la como dispatch do evento também do exemplo:
```php
$data = array(
    "increment_id"=>'100000001',
    "series"=>"123",
    "number"=>"123",
    "total"=>"123.5", //Valor total da nota fiscal
    "cfop"=>"55555",
    "created_at"=>"2020-08-11",
    "key_nfe"=>"01720552361842678452032857547912853962184146",
);

Mage::dispatchEvent(
    'insert_into_intelipost_invoice',
    [
        'nfe' => $data
    ]
);

```

