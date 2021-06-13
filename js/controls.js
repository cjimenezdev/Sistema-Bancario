const app = new Vue({
    el: '#Data',
    data: {
        Clientes: [],
        cliente: {
            idCliente: 0,
            nombre: '',
            apellido: '',
            cedula: '',
            cuenta: '',
            saldo: '',
            tcuenta: ''
        },
        estado: true
    },
    mounted() {
        this.fetchAllData();

    },
    methods: {
        actualizarcli: function(item) {
            this.estado = !this.estado;
            this.cliente = item;
        },
        eliminarCliente: function(index, item) {
            if (confirm("Esta seguro de eliminar ?")) {
                let formData = new FormData();
                formData.append('id_cliente', item.idCliente);
                formData.append('op', 'eliminar');
                axios({
                        method: 'POST',
                        url: 'config/api.php',
                        data: formData,
                        config: { Headers: { 'Content-Type': 'multipart/form-data' } }
                    })
                    .then(function(response) {
                        if (response.data) {
                            app.Clientes.splice(index, 1);
                            alert("Eliminado Correctamente")
                        }
                        console.log(response.data);
                    }).catch(function(response) {
                        console.log(response);
                    });
            } else {}
        },
        fetchAllData: function() {
            axios.get('config/api.php', )
                .then(response => {
                    console.log(response.data);
                    app.Clientes = response.data
                })
                .catch(error => {
                    console.log(error)
                    this.errored = true
                }).finally(() => this.loading = false)
        },


        guardarCli: function() {
            var cedu = document.getElementById("ced").value;
            var nomb = document.getElementById("nom").value;
            var apell = document.getElementById("ap").value;
            var cuent = document.getElementById("cu").value;
            var sald = document.getElementById("sa").value;
            var tcuent = document.getElementById("tc").value;
            if (cedu == "" || nomb == "" || apell == "" || cuent == "" || sald == "" || tcuent == "") {
                alert("Llenar todos los campos");
                document.getElementById("cedula").focus();
            } else {

                var mensaje = confirm("¿Deseas registrar este cliente");
                //Detectamos si el usuario acepto el mensaje
                if (mensaje) {
                    let formData = new FormData();
                    formData.append('id_cliente', this.cliente.idCliente);
                    formData.append('nombres', this.cliente.nombre);
                    formData.append('apellidos', this.cliente.apellido);
                    formData.append('cedula', this.cliente.cedula);
                    formData.append('numero_cuenta', this.cliente.cuenta);
                    formData.append('id_tipocuenta', this.cliente.tcuenta);
                    formData.append('saldo', this.cliente.saldo);

                    axios({
                            method: 'POST',
                            url: 'config/api.php',
                            data: formData,
                            config: { Headers: { 'Content-Type': 'multipart/formData' } }
                        })
                        .then(function(response) {
                            console.log(response);
                            app.fetchAllData();
                            app.estado = !app.estado;
                            app.limpiar();
                        }).catch(function(response) {
                            console.log(response);
                        });

                } else {}
            }

        },
        limpiar: function() {
            this.cliente.idCliente = 0;
            this.cliente.nombre = "";
            this.cliente.cedula = "";
            this.cliente.apellido = "";
            this.cliente.tcuenta = "";
            this.cliente.saldo = "";
            this.cliente.cuenta = "";
        }

    }
});