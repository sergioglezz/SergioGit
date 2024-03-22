## Activar, descativar Virtualización en BIOS

Podemos activar o descativar la virtualización de nuestro sistema desde la powershell de windows ejecutada como administrador con los comandos:

```bash
# Para desactivarla
$ bcdedit /set hypervisorlaunchtype off
# Para activarla
$ bcdedit /set hypervisorlaunchtype auto
```

## Sharing recursos en docker

Si trabajamos en windows puede ser necesario para levantar los contenedores dar permisos a la ubicación desde el propio **docker desktop**

## Document Root

Si trabajamos desde **Docker Desktop**, al ejecutar `docker info | -i root` aunque nos devuelvan una ubicación del _documento root_, esta se ubica dentro de la imagen virtual que usa docker desktop para trabajar, por eso se recomienda evitar _volúmenes anónimos_ y _nombrados_.

```bash
$ docker info | grep -i root
WARNING: No swap limit support
Docker Root Dir: /var/lib/docker
```