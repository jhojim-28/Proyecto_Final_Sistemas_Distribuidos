# Proyecto_Final_Sistemas_Distribuidos
Proyecto final de la materia sistemas de distribuidos. gestión I/2021


En el siguiente Trabajo se realizo la implementacion de microservicios , el cual se utilizo las herramientas de lumen de laravel el cual es un micro-framework que trabaja con php 
y es utilizado con composer un gestor de paquetes para php, adema de esto se utilizo el passpot de laravel para el servicio de autenticacion y guzzel para la comunicacion de http ya sean sicronas o asincronas
y como base de datos sqlite para el guadrdado de datos asi mismo diferente commandos de composer como ser :


composer create-project laravel/lumen Lumen1Api
composer create-project laravel/lumen Lumen2Api
composer create-project laravel/lumen LumenGatewayApi

php artisan make:migration CreateTaxisTables --create=taxis
php artisan migrate
php artisan db:seed
php artisan migrate:fresh --seed

php -S localhost:8000 -t ./public           //Lumen1Api
php -S localhost:8001 -t ./public           //Lumen2Api
php -S localhost:8002 -t ./public           //LumenGatewayApi


php artisan passport:install
php artisan passport:client


Client ID: 1
Client secret: f2jpibO4hTnrkeuVDAkpg75SH2y6imaa44YnM9Vf
Cliente authorization Code:

Client ID: 2
Client secret: bQYopj1gr8cUHvHSF4h81GrLjrGACmYRiiiNByka
Cliente authorization Code:

Client ID: 3   micliente
Client secret: Ku3mWXl108yhePK3V8cVHAsNcVlE6Ku5g12CgQgZ
Cliente authorization Code: eyJ0eXAiOiJKV1QiLCJhbGciOiJSUzI1NiJ9.eyJhdWQiOiIzIiwianRpIjoiYmYyM2I1OWZlNjM0ZmI0OTdmYjQ1NDM2M2EwZGRhNmRkYTA0NmNjZTk2ZTQzYWU1ZjRhNTNhZTMzNzg0YzNhODA5YjM4NTU4MjJjZTFkNTAiLCJpYXQiOjE2MjYyOTY4NDUsIm5iZiI6MTYyNjI5Njg0NSwiZXhwIjoxNjU3ODMyODQ1LCJzdWIiOiIiLCJzY29wZXMiOltdfQ.nLmfyaCdvxnWb5DKMgTHaj35phchNYDfuPypMXD5haX2kK4M1jZmzRxejGZH60iMpi2YTTLmnNyR_rELqsKIm4_hFX76k8NGZkJdTvJz7Cz6OQwO6e3ABBlAqm3A-YDuEajCcljH-65rrS9YNQSexJ11LOdLAIU7_GdsB-RRRtdUWIXmvI0joRxJ6nAekLx4FUALiTQGOfc5V51lanqKO49B4N_N56xE_GHk87dJdEcPNxUTKKQYaXVlOd6f8b8JdKeq1_M185lSSnn82ol2QzH7PIZ-FTwD0gsZLFSueffXcDtVjdCLwRk5ltxT0-EDF7TDunkSOmp0aIRJQqa343JP9e4EPhuYPO73HKy2pCI89xCpUgmUmNYzYBpGzsJSNoKgRQweoEDh1svtfrvl8tcOnB60DYGYxejXJwfCp2MbKykNL_zAZsXBmQmBKzVl8_50oz3uR-wtaW9oBnTOGvcP-j7lOksPRZY9TQeERJsvEcbzOrzr3-EczE9fdkDflj0nuk_7QZdyg8pGeMhtMJPk1gmqCISrygwCz8kP3FcrY9ULSat0CahwONNqIdVXt-cINyYgShzlV3y06PVBrsjCmWxGxaxpRy9xLxVfJf223ZKaUy3ojOW2jdTOaTJWMqEVl-JuifS0-8hgm-NsK0FFrAsn492PbP5_FBmOoCw

Authorization= bearer + clave en header para poder autenticar;
