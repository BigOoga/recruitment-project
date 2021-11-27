<template>
    <div class="container py-3">
        <div class="row my-3">
            <div class="col-6">
                <form>
                    <div class="form-group">
                        <label for="qr-code">ID</label>
                        <input
                            v-model="id"
                            type="text"
                            class="form-control"
                            id="qr-code"
                        />
                        <small id="emailHelp" class="form-text text-muted"
                            >Qui è dove andrà il QR code</small
                        >
                    </div>

                    <button
                        @click="addContact"
                        type="button"
                        class="btn btn-primary"
                    >
                        Aggiungi
                    </button>
                </form>
                <div id="feedback">
                    {{ feedback }}
                </div>
            </div>
        </div>
    </div>
</template>

<script>
export default {
    name: "MyApp",
    data() {
        return {
            id: null,
            feedback: null,
            baseUri: "http://127.0.0.1:8000",
        };
    },
    methods: {
        addContact() {
            axios
                .post(
                    `${this.baseUri}/api/contacts`,
                    {
                        id: this.id,
                    },
                    {
                        headers: { Authorization: `Bearer ${token}` },
                    }
                )
                .then((response) => {
                    this.id = null;
                    const data = response.data;
                    this.feedback = `SUCCESSO: ${data}`;
                })
                .catch((error) => {
                    this.id = null;
                    const data = error.response.data;
                    this.feedback = `ERRORE: ${data.error}`;
                });
        },
    },
};
</script>

<style></style>
