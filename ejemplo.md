```mermaid
erDiagram
	usuario ||--|| Persona : references
	entrenador ||--|| Persona : references
	actividades ||--|| entrenador : references
	practicar ||--|| actividades : references
	practicar ||--|| usuario : references
	horarios ||--|| actividades : references

	Persona {
		INTEGER id_persona
		VARCHAR(255) nombre
		VARCHAR(255) apellidos
		DATE fecha_nac
		VARCHAR(255) direccion
	}

	usuario {
		INTEGER id_usuario
		VARCHAR(255) email
		VARCHAR(255) telefono
		INTEGER id_persona
	}

	entrenador {
		INTEGER id_entrenador
		VARCHAR(255) especialidad
		INTEGER id_persona
	}

	actividades {
		INTEGER id_actividad
		VARCHAR(255) nombre
		VARCHAR(255) descripcion
		INTEGER id_entrenador
		 
	}

	practicar {
		INTEGER id_actividad
		INTEGER id_usuario
		DATE fecha_alta
	}

	horarios {
		INTEGER id_horario
		TIME hora_incio
		TIME hora_fin
		ENUM dia_semana
		INTEGER id_actividad
	}
