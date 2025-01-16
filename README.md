# API REST de Productos con Laravel Sail, MySQL y Redis

Este proyecto es un CRUD de productos desarrollado con Laravel y utilizando Laravel Sail para la gestión de contenedores. Se integran MySQL como base de datos y Redis para almacenamiento en caché. La documentación de la API se generó con Laravel Scramble y se encuentra en `/docs/api`.

## Requisitos

- Docker y Docker Compose
- Git

## Instalación y Configuración

1. **Clonar el repositorio:**
   ```bash
   git clone https://github.com/JeanDev-10/API-REST-Laravel-Redis-Productos.git
   cd API-REST-Laravel-Redis-Productos
   ```

2. **Copiar el archivo de configuración:**
   ```bash
   cp .env.example .env
   ```

3. **Levantar los contenedores con Laravel Sail:**
   ```bash
   ./vendor/bin/sail up -d
   ```

   > Si es la primera vez ejecutando el proyecto, instalar las dependencias:
   ```bash
   ./vendor/bin/sail composer install
   ```

4. **Ejecutar las migraciones:**
   ```bash
   ./vendor/bin/sail artisan migrate 
   ```

5. **Acceder a la API:**
   - La API estará disponible en `http://localhost`.
   - La documentación generada con Laravel Scramble se encuentra en: `http://localhost/docs/api`.

## Comandos Útiles

- **Parar los contenedores:**
  ```bash
  ./vendor/bin/sail down
  ```

- **Acceder a la CLI de Laravel dentro del contenedor:**
  ```bash
  ./vendor/bin/sail artisan tinker
  ```

- **Limpiar caché de configuración y rutas:**
  ```bash
  ./vendor/bin/sail artisan config:clear
  ./vendor/bin/sail artisan route:clear
  ```

## Tecnologías Utilizadas

- Laravel 10
- Laravel Sail
- MySQL
- Redis
- Laravel Scramble (para documentación de la API)

---

Con estos pasos, la API debería estar lista para usarse. ¡Feliz desarrollo! 🚀
