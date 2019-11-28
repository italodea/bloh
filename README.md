# BLOH!

[![](https://sourcerer.io/fame/italodea/italodea/bloh/images/0)](https://sourcerer.io/fame/italodea/italodea/bloh/links/0)[![](https://sourcerer.io/fame/italodea/italodea/bloh/images/1)](https://sourcerer.io/fame/italodea/italodea/bloh/links/1)[![](https://sourcerer.io/fame/italodea/italodea/bloh/images/2)](https://sourcerer.io/fame/italodea/italodea/bloh/links/2)[![](https://sourcerer.io/fame/italodea/italodea/bloh/images/3)](https://sourcerer.io/fame/italodea/italodea/bloh/links/3)[![](https://sourcerer.io/fame/italodea/italodea/bloh/images/4)](https://sourcerer.io/fame/italodea/italodea/bloh/links/4)[![](https://sourcerer.io/fame/italodea/italodea/bloh/images/5)](https://sourcerer.io/fame/italodea/italodea/bloh/links/5)[![](https://sourcerer.io/fame/italodea/italodea/bloh/images/6)](https://sourcerer.io/fame/italodea/italodea/bloh/links/6)[![](https://sourcerer.io/fame/italodea/italodea/bloh/images/7)](https://sourcerer.io/fame/italodea/italodea/bloh/links/7)

<br>
Bloh de inicio era para ter sido um projetinho de blog, mas que aos poucos acabou se tornando algo mais próximo de  uma rede social. No inicio deveria ser feito usando laravel 6, mas que com PHP puro e algumas bibliotecas front-end ficou muito mais simples e rápido.


# Requisitos

 - php 7.2.X *versões novas do php 7 podem funcionar perfeitamente
 - mysql 5.4, 5.5, 5.6+ ou mariaDB 10.1+
 - npm
 - git

# Instalação e configuração
Primeiro passo será fazer a clonagem deste repositório: 
<br><br>
`git clone https://github.com/italodea/bloh.git`
<br><br>
Em seguida entre na pasta do repositório:
<br><br>
`cd bloh\`
<br><br>
Para instalar todas as dependências:
<br><br>
`npm i`
<br><br>
Após clonar e configurar abra seu editor de textos preferidos e edite o arquivo `connection.php.example` localizado na pasta `etc` e ao finalizar renomeie-o como na imagem abaixo:

![sdfsdf](https://2k169w.ch.files.1drv.com/y4mmKTgMWq1Izo7PWWwPvWXwdzSw4PROAmOmYCQ7Pon7WmxLkZ-HL8ijszGjREXLeP_jh4rMM4C7e2HwnoKFWuvp4QUKg8mpiYlopu29ymDvhJSNYLyCmn8_Wj2MsopoxPK2KEO8aNgX1TCXpPCTjA6RqJ8P5FLmJHrTdsuNMlY_Y0eN1995Glgfv4Eiq74ksLBlXzNWFWJCWe382RqEoSWfw?width=239&height=77&cropmode=none)

Após isso lembre-se de importar todas as tabelas presentes na pasta `backupSQL` e copiar para o banco que você configurou no passo anterior.

# Finalizando
Após o termino mova o repositório para o seu servidor apache ou se preferir use o embutido do php:
<br>
`php -S seu.endereco.ip.x:porta`

# Aviso

Atualmente ainda não foi feita a parte de administração, então pode criar uma conta normalmente, pois não existe confirmação ou superioridade.
