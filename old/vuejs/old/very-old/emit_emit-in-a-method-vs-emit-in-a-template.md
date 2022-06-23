# Using $emit() in a method versus emit in a template

As you can see below, the dollar sign is not always used the same way in $emit() depending of where exactly you use this function. The dollar sign might or might not be there with it.

## In a method and a template:

Your method:

        methods: {
          onValueChange (event: any) {
            console.log(event.value);
            this.$emit('update:modelValue', event.value);
            console.log(this.modelValue);
          }
        }

Your template:

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


## In a template only:

    <template>
    <div class="home">

        <p>{{ title }}</p>

        <p><input type="text" :value="modelValue" @input="$emit('update:modelValue', $event.target.value)" /></p>

    </div>
    </template>
