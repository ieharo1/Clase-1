# AgriSmart - Sistema de Gestión Agrícola Inteligente

Proyecto desarrollado por **Isaac Esteban Haro Torres**.

---

## Descripción

Plataforma integral para la gestión de cultivos agrícolas con seguimiento de parcelas, plantas, riego, fertilizantes, control de plagas y registro climático.

---

## Características

- Gestión de parcelas y áreas de cultivo
- Registro de plantas con seguimiento de estado y salud
- Control de riego por parcela
- Registro de aplicaciones de fertilizantes
- Sistema de detección y seguimiento de plagas
- Registro climático (temperatura, humedad, lluvia)
- Dashboard con estadísticas y alertas
- Alertas de plagas activas
- Seguimiento de cosechas

---

## Stack Tecnológico

* PHP 8.2
* Laravel 11
* Livewire 3
* Bootstrap 5
* MySQL 8.0
* Docker
* Docker Compose

---

## Instalación desde cero

1. Clonar el repositorio
2. Ejecutar `docker compose up -d --build`
3. Esperar a que los contenedores estén levantados
4. Ejecutar migraciones: `docker compose exec app php artisan migrate`
5. Ejecutar seeders: `docker compose exec app php artisan db:seed`
6. Acceder al sistema en `http://localhost:8000`

### Configuración de Base de Datos

El sistema está configurado para usar MySQL con las siguientes credenciales:
- Host: mysql
- Database: agri_smart
- User: laravel
- Password: laravel

---

## 👨‍💻 Desarrollado por Isaac Esteban Haro Torres

**Ingeniero en Sistemas · Full Stack · Automatización · Data**

- 📧 Email: zackharo1@gmail.com
- 📱 WhatsApp: 098805517
- 💻 GitHub: https://github.com/ieharo1
- 🌐 Portafolio: https://ieharo1.github.io/portafolio-isaac.haro/

---

© 2026 Isaac Esteban Haro Torres - Todos los derechos reservados.

