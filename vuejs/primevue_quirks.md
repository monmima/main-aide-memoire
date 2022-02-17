# PrimeVue and some of its quirks

Dropdown form inputs need a v-model parameter. Make sure you use something like this:

    <template>
        <Dropdown
            v-model="value"
            optionValue="texteReponse"
            optionLabel="texteReponse"
            :options="questionProp.reponsesPossibles"
            @change="onValueChange"
            placeholder="Sélectionner..."
        />
    </template>