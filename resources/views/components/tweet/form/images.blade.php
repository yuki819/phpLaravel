<div x-data="inputFormHandler()" class="my-2">
    <template x-for="(field, i) in fields" :key="i">
        <div class="w-full flex my-2">
            <label :for="field.id" class="border border-gray-300 rounded-md p-2
            w-full bg-white cursor-pointer">
                <input type="file" accept="image/*" class="sr-only" :id="field.id"
                name="images[]" @change="fields[i].file = $event.target.files[0]">
                <span x-text="field.file ? field.file.name : '画像を選択'"
                class="text-gray-700"></span>
            </label>
            <button type="reset" @click="removeField(i)" class="p-2">
            <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="currentColor" class="w-6 h-6">
                <path fill-rule="evenodd" d="M12 2.25c-5.385 0-9.75 4.365-9.75 9.75s4.365 9.75 9.75 9.75 9.75-4.365 9.75-9.75S17.385 2.25 12 2.25zm-1.72 6.97a.75.75 0 10-1.06 1.06L10.94 12l-1.72 1.72a.75.75 0 101.06 1.06L12 13.06l1.72 1.72a.75.75 0 101.06-1.06L13.06 12l1.72-1.72a.75.75 0 10-1.06-1.06L12 10.94l-1.72-1.72z" clipRule="evenodd" />
            </svg>

            </button>
        </div>
    </template>

    <template x-if="fields.length < 4">
        <button type="button" @click="addField()" class="inline-flex justify-center
        py-2 px-4 border border-transparent shadow-sm text-sm font-medium rouded-md text-white
        bg-gray-500 hover:bg-gray-600">
        <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5" viewBox="0 0 20 20" fill="currentColor">
            <path fill-rule="evenodd" d="M4 3a2 2 0 00-2 2v10a2 2 0 002 2h12a2 2 0 002-2V5a2 2 0 00-2-2H4zm12 12H4l4-8 3 6 2-4 3 6z" clipRule="evenodd" />
        </svg>
            <sapn>画像を追加</sapn>
        </button>
    </template>
</div>

<script defer src="https://unpkg.com/alpinejs@3.8.1/dist/cdn.min.js"></script>
<script>
    function inputFormHandler(){
        return {
            fields: [],
            addField(){
                const i = this.fields.length;
                this.fields.push({
                    file: '',
                    id: `input-image-${i}`
                });
            },
            removeField(index){
                this.fields.splice(index, 1);
            }
        }
    }
</script>