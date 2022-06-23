# Creating a config file

Imagine you have a site with many question forms. The content of each form is different, but the layout is the same. To avoid repeating yourself, you could create a **config files**, which would define what content gets displayed in a dynamic page.

Here is how to proceed.

1. Create a configs folder called **configs/**.
1. Create a configs file called **configs/questions.json**.
1. Copy and paste the following code in your new file:

        {
          "formTitle": "Title of the form",
          "formSections":
          [
            { "question": "How are you?" },
            { "question": "What time is it?" }
          ]
        }

1. Create a file called **Questions.vue** or use an existing file.
1. Copy and paste the following code in your file:

        <template>
          <h1>{{ myQuestionFile.formTitle }}</h1>

          <div v-for="item in myQuestionFile.formSections" :key="item.question">
            {{ item.question }}
          </div>
        </template>

        <script>
        import QuestionFileLoaded from '../configs/questions.json';

        export default {
          name: "Questions",
          components: {

          },
          data () {
            return {
              myQuestionFile: QuestionFileLoaded
            }
          }
        }
        </script>

Now you should see the content of your JSON file rendered in your view.

You can imagine that something much more complex could be created with a configuration file.