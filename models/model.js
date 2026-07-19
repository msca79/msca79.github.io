const models = [
    {
        name: "GPT-4o",
        access: "zárt",
        releaseDate: "2024-05-13",
        contextSize: "128k",
        parameters: "ismeretlen",
        useCase: "llm, multimodal",
        company: "OpenAI",
        task: "gyors, gondolkodós, sokoldalú"
    },
    {
        name: "Claude 3.5 Sonnet",
        access: "zárt",
        releaseDate: "2024-06-20",
        contextSize: "200k",
        parameters: "ismeretlen",
        useCase: "llm, coding",
        company: "Anthropic",
        task: "gondolkodós, precíz"
    },
    {
        name: "Llama 3.1 405B",
        access: "nyílt",
        releaseDate: "2024-07-23",
        contextSize: "128k",
        parameters: "405B",
        useCase: "llm",
        company: "Meta",
        task: "gondolkodós, alapmodell"
    },
    {
        name: "Gemini 1.5 Pro",
        access: "zárt",
        releaseDate: "2024-02-15",
        contextSize: "1M-2M",
        parameters: "ismeretlen",
        useCase: "llm, multimodal",
        company: "Google",
        task: "gondolkodós, nagy kontextus"
    },
    {
        name: "Mistral Large 2",
        access: "nyílt (részben)",
        releaseDate: "2024-07-24",
        contextSize: "128k",
        parameters: "123B",
        useCase: "llm",
        company: "Mistral AI",
        task: "gyors, hatékony"
    }
];

// Exportálás, ha modulként használjuk, vagy simán elérhető lesz a globális scope-ban
if (typeof module !== 'undefined' && module.exports) {
    module.exports = models;
}
