# TesteMagentoModuleIpLog
Módulo para Magento 2 que grave o IP de cada visitante no debug.log

### Explicações

<p align="justify">
  Tive algumas dificuldades quanto ao Magento, consegui instalar e configurar ele em ambiente Windows usando o WampServer. 
  <ul>
    <li>Criei um modulo em app/code, onde eu criei os arquivos di.xml e module.xml (em /etc);</li>
    <li>Criei a classe Handler.php onde eu defino o tipo de LOG e o arquivo;</li>
    <li>Criei a classe Logger.php onde tem o método que estende Monolog, e o arquivo registration.php;</li>
    <li>Instalei o modulo via linha de comando, porém não obtive resultados.</li>
  </ul>
  Parei nessa parte. Preciso de ajuda para entender como eu irei pegar o IP, preciso sobrescrever algum arquivo do Magento ou eu faço isso no meu module mesmo? ele não está gerando os logs no debug.log.
</p>

<p align="justify">
  Um outro jeito que eu tentei foi pelo Command. 
  <ul>
    <li>Criei uma classe que estende de Command onde passo no __construct o meu arquivo Logger;</li>
    <li>Criei um método execute que chama o método que criei nessa classe Logger.</li>
  </ul>
  Nesse caso eu esse comando para gerar log:
</p>

```
php bin\magento magento:logExample
```

<p align="justify">
  E ele grava o arquivo e grava o log dentro dele.
</p>





