<template>
    <div>

        <form @submit.prevent="editarProducto(producto)" v-if="editarActivo">
            <h2>Editar Productos</h2>
            <input type="text" placeholder="Nombre"
            class="form-control mb-2" v-model="producto.nombre">
            <input type="text" placeholder="Descripcion"
            class="form-control mb-2" v-model="producto.descripcion">
            <button class="btn btn-success" type="submit">Guardar Producto</button>
        </form>

        <form @submit.prevent="agregar" v-else>
            <h2>Agregar Productos</h2>
            <input type="text" placeholder="Nombre"
            class="form-control mb-2" v-model="producto.nombre">
            <input type="text" placeholder="Descripcion"
            class="form-control mb-2" v-model="producto.descripcion">
            <button class="btn btn-primary" type="submit">Agregar Producto</button>
        </form>

        <hr class="mt-3">
        <h3>Listado de Productos</h3>
        <ul class="list-group my-2">
            <li class="list-group-item"
            v-for="(item, index) in productos" :key="index">
                <span class="badge badge-primary float-right">
                    {{item.updated_at}}
                </span>
                <p>{{ item.nombre }}</p>
                <p>{{ item.descripcion }}</p>
                <button class="btn btn-danger btn-sm"
                @click="eliminarProducto(item, index)">Eliminar</button>

                <button class="btn btn-warning btn-sm"
                @click="editarFormulario(item)">Editar</button>
            </li>
        </ul>
    </div>
</template>

<script>
export default {
    data() {
        return {
            productos: [],
            producto: {nombre: '', descripcion: ''},
            editarActivo: false //falso cuando es el form de agregar, true cuando es form de editar
        }
    },
    created () {
        axios.get('/productos')
        .then (res => {
            this.productos = res.data;
        })
    },
    methods: {
        editarFormulario (item) {
            this.editarActivo = true;
            this.producto.nombre = item.nombre;
            this.producto.descripcion = item.descripcion;
            this.producto.id = item.id;
        },
        editarProducto (item) {
            const params = {
                nombre: item.nombre,
                descripcion: item.descripcion
            };
            axios.put(`/productos/${item.id}`, params)
                .then( res => {
                    const index = this.productos.findIndex(productoBuscar => productoBuscar.id === res.data.id);
                    this.productos[index].nombre = res.data;
                })
        },
        agregar () {
            if(this.producto.nombre.trim() === '' || this.producto.descripcion.trim() === ''){
                alert('Debes completar todos los campos antes de guardar');
                return;
            }
            const params = {
                nombre: this.producto.nombre, 
                descripcion: this.producto.descripcion
            }
            this.producto.nombre = '';
            this.producto.descripcion = '';
            //console.log(this.producto.nombre, this.producto.descripcion);
            axios.post('/productos', params)
                .then( res => {
                    this.productos.push(res.data);
                })
        },
        eliminarProducto (item, index) {
            axios.delete(`/productos/${item.id}`)
            .then( () => {
                this.productos.splice(index, 1); //funcion JS para eliminar un elemento
            })
        }
    }
}
</script>