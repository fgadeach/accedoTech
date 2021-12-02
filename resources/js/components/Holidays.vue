<template>
    <div class="grid grid-cols-4 gap-4">
        <div
            :class="`p-auto cursor-pointer hover:bg-indigo-400 m-5 py-4 bg-green-400 text-center text-xl font-bold rounded-lg tracking-wide text-white ${week.agent_week != null ? 'bg-indigo-400' : ''}`"
            v-for="(week, index) in all_week" :key="index" @click="selectDay(week)">
            <div>
                <h1> {{ week.name }}</h1>
            </div>
        </div>
        <div class="p-auto m-5 py-4 bg-gray-700 text-center text-xl font-bold rounded-lg tracking-wide text-white">
            <div>
                <h1> Total Horas: 40</h1>
            </div>
        </div>
    </div>
</template>

<script>
export default {
    name: "Holidays",
    props: ['weeks'],
    data() {
        return {
            all_week: this.weeks
        }
    },
    methods: {
        async selectDay(week) {
            let data = {
                week: week
            }
            await axios.post(`AgentWeek`, data).then(res => {
                if (res.data.saved) {
                    this.all_week = res.data.weeks
                    alert('Ya fue guardado')
                }
            });
        }
    }
}
</script>
